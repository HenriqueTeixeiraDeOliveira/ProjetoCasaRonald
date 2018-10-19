<?php

namespace Tests\Feature;

use App\Lesson;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CompletesTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function guests_can_not_complete_anything()
    {
        $this->withExceptionHandling();

        $lesson = create(Lesson::class);

        $this->post('lesson/' . $lesson->id . '/completes')
            ->assertRedirect('/login');
    }

    /** @test */
    public function an_authenticated_user_can_complete_any_lesson()
    {
        $this->signIn();                                        // Create a authenticated user

        $lesson = create(Lesson::class);                        // Create a lesson

        $this->assertCount(0, $lesson->completes);              // Assert no one completed the lesson

        $lesson->complete();                                    // User completes the lesson

        $this->assertCount(1, $lesson->fresh()->completes);     // Assert database received the post request
    }

    /** @test */
    public function an_authenticated_user_can_uncomplete_any_lesson()
    {
        $this->signIn();                                        // Create a authenticated user

        $lesson = create(Lesson::class);                        // Create a lesson

        $lesson->complete();                                    // User completes the lesson

        $lesson->incomplete();                                  // User incompletes the lesson

        $this->assertCount(0, $lesson->completes);              // Assert database received the delete request
    }

    /** @test */
    public function an_authenticated_user_cannot_complete_a_lesson_twice()
    {
        $this->signIn();                                        // Create a authenticated user

        $lesson = create(Lesson::class);                        // Create a lesson

        $lesson->complete();                                    // User completes the lesson for the first time

        $this->assertCount(1, $lesson->completes);              // Assert database received the post request

        $lesson->fresh()->complete();                           // User tries to complete the lesson for the second time

        $this->assertCount(1, $lesson->completes);              // Assert database has just one complete request
    }
}