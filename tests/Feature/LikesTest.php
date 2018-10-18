<?php

namespace Tests\Feature;

use App\Lesson;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LikesTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function guests_can_not_like_anything()
    {
        //$this->withExceptionHandling();

        $lesson = create(Lesson::class);

        $this->post('lesson/' . $lesson->id . '/likes')
             ->assertRedirect('/login');
    }

    /** @test */
    public function an_authenticated_user_can_like_any_lesson()
    {
        $this->signIn();                                    // Create a authenticated user

        $lesson = create(Lesson::class);                    // Create a lesson

        $this->assertCount(0, $lesson->likes);              // Assert no one liked the lesson

        $lesson->like();                                    // User likes the lesson

        $this->assertCount(1, $lesson->fresh()->likes);     // Assert database received the post request
    }

    /** @test */
    public function an_authenticated_user_can_unlike_any_lesson()
    {
        $this->signIn();                                    // Create a authenticated user

        $lesson = create(Lesson::class);                    // Create a lesson

        $lesson->like();                                    // User likes the lesson

        $lesson->unlike();                                  // User unlikes the lesson

        $this->assertCount(0, $lesson->likes);              // Assert database received the delete request
    }

    /** @test */
    public function an_authenticated_user_cannot_like_a_lesson_twice()
    {
        $this->signIn();                                    // Create a authenticated user

        $lesson = create(Lesson::class);                    // Create a lesson

        $lesson->like();                                    // User likes the lesson for the first time

        $this->assertCount(1, $lesson->likes);          // Assert database received the post request

        $lesson->fresh()->like();                           // User tries to like the lesson for the second time

        $this->assertCount(1, $lesson->likes);              // Assert database has just one like request
    }
}