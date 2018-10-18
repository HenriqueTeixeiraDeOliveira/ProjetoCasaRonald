<?php

namespace Tests\Feature;

use App\Lesson;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class FavoritesTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function guests_can_not_favorite_anything()
    {
        $this->withExceptionHandling();

        $lesson = create(Lesson::class);

        $this->post('lesson/' . $lesson->id . '/favorites')
            ->assertRedirect('/login');
    }

    /** @test */
    public function an_authenticated_user_can_favorite_any_lesson()
    {
        $this->signIn();                                        // Create a authenticated user

        $lesson = create(Lesson::class);                        // Create a lesson

        $this->assertCount(0, $lesson->favorites);              // Assert no one favorited the lesson

        $lesson->favorite();                                    // User favorites the lesson

        $this->assertCount(1, $lesson->fresh()->favorites);     // Assert database received the post request
    }

    /** @test */
    public function an_authenticated_user_can_unfavorite_any_lesson()
    {
        $this->signIn();                                        // Create a authenticated user

        $lesson = create(Lesson::class);                        // Create a lesson

        $lesson->favorite();                                    // User favorites the lesson

        $lesson->unfavorite();                                  // User unfavorites the lesson

        $this->assertCount(0, $lesson->favorites);              // Assert database received the delete request
    }

    /** @test */
    public function an_authenticated_user_cannot_favorite_a_lesson_twice()
    {
        $this->signIn();                                        // Create a authenticated user

        $lesson = create(Lesson::class);                        // Create a lesson

        $lesson->favorite();                                    // User favorites the lesson for the first time

        $this->assertCount(1, $lesson->favorites);              // Assert database received the post request

        $lesson->fresh()->favorite();                           // User tries to favorite the lesson for the second time

        $this->assertCount(1, $lesson->favorites);              // Assert database has just one favorite request
    }
}