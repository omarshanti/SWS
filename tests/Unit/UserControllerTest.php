<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use Tests\Traits\RefreshSpecificTable;

/**
 * @method post(string $route, array $array)
 */
class UserControllerTest extends TestCase
{

    use WithoutMiddleware;
//    use RefreshDatabase;

    use RefreshSpecificTable;


    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function test_create_a_new_user()
    {
        // Test data for creating a new user
        $data = [
            'name_en' => 'test testing',
            'name_ar' => 'تست تستنج',
            'gov_id' => 18,
            'email' => 'test@test.com',
            'password' => '12345678',
            'status' => '1'
        ];

        // Create a new user using the provided test data
        $user = User::create($data);

        // Assert that the user's properties match the provided test data
        $this->assertEquals($data['name_en'], $user->name_en);
        $this->assertEquals($data['name_ar'], $user->name_ar);
        $this->assertEquals($data['gov_id'], $user->gov_id);
        $this->assertEquals($data['email'], $user->email);
        $this->assertEquals($data['password'], $user->password);
        $this->assertEquals($data['status'], $user->status);
        $this->assertEquals($data['password'], $user->password);
    }

    public function test_delete_user()
    {
        // Create a user using the factory
        $user = User::factory()->create();

        // Delete the user and assert the deletion result
        $isDeleted = $user->delete();
        $this->assertTrue($isDeleted);

        // Ensure the user is actually soft deleted from the database
        $this->assertTrue($user->trashed());
    }
}
