<?php

namespace Tests\Unit;

use App\Models\ChildIdentification;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Tests\Traits\RefreshSpecificTable;

class ChildControllerTest extends TestCase
{
    use RefreshSpecificTable;

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }
    public function test_it_shows_the_child_profile()
    {
        $child = ChildIdentification::factory()->create();
        $attachs = ChildsAttachment::factory()->create(['child_id' => $child->id]);
        $photo = ChildsAttachment::factory()->create(['child_id' => $child->id, 'file_name' => 'child_personal_photos']);

        $this->get('/child/' . $child->id)
            ->assertStatus(200)
            ->assertViewIs('Child.child-profile')
            ->assertViewData([
                'child' => $child,
                'attachs' => $attachs,
                'photo' => $photo,
            ]);
    }

    public function test_child_delete() {
        // Create a user using the factory
        $child = ChildIdentification::factory()->create();

        // Delete the user and assert the deletion result
        $isDeleted = $child->delete();
        $this->assertTrue($isDeleted);

        // Ensure the child identification instance is actually soft deleted from the database
        $this->assertTrue($child->trashed());
    }

}
