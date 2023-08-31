<?php

namespace Tests\Feature;

use App\Models\ChildIdentification;
use App\Models\Guardian;
use App\Models\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Tests\TestCase;
use Tests\Traits\RefreshSpecificTable;

class ChildControllerTest extends TestCase
{
//    use withoutMiddleware;
    use RefreshSpecificTable;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        // Send a GET request to the '/users' endpoint
        $response = $this->get('/users');

        // Assert that the initial response is a redirection (status code 302)
        $response->assertStatus(302);

        // Follow the redirection
        $response = $this->get($response->headers->get('Location'));

        // Assert that the final response is a success (status code 200)
        $response->assertStatus(200);
    }

    public function test_it_shows_the_child_profile()
    {
        $child = ChildIdentification::factory()->create();
//        $attachs = ChildsAttachment::factory()->create(['child_id' => $child->id]);
//        $photo = ChildsAttachment::factory()->create(['child_id' => $child->id, 'file_name' => 'child_personal_photos']);

        $this->get('/child/' . $child->id)
            ->assertStatus(200)
            ->assertViewIs('Child.child-profile')
            ->assertViewData([
                'child' => $child,
//                'attachs' => $attachs,
//                'photo' => $photo,
            ]);
    }


    public function test_displays_users_on_the_page()
    {
        $userLogin = User::factory()->create();
        $this->actingAs($userLogin);
        $response = $this->get('/users');
        $response->assertStatus(200);
        $users = User::all();
        foreach ($users as $user) {
            $response->assertSee($user->id);
        }
    }

    public function test_displays_user_profile()
    {
        $userLogin = User::factory()->create();
        $this->actingAs($userLogin);
        $response = $this->get('/profile/'.$userLogin->id);
        $response = $this->get($response->headers->get('Location'));
        $response->assertStatus(200);
        $response->assertSeeText($userLogin->name);
    }
}
