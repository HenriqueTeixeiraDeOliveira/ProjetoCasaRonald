<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class NotificationsTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function an_user_receives_a_notification_for_going_to_the_school()
    {
        $user = factory('App\User')->create();
        $school = factory('App\School')->create();
        factory('App\Sticker')->create(['type' => 'escola']);

        $this->assertCount(0, $user->notifications()->get());

        $user->wentToSchool($school,1);

        $this->assertCount(1, $user->fresh()->notifications()->get());
    }

    /** @test */
    public function an_user_receives_a_notification_for_reading_a_book()
    {
        $user = factory('App\User')->create();
        $book = factory('App\Book')->create();

        factory('App\Sticker')->create(['type' => 'livro']);

        $this->assertCount(0, $user->notifications()->get());

        $user->readOneBook($book,1);

        $this->assertCount(1, $user->fresh()->notifications()->get());
    }

    /** @test */
    public function an_user_receives_a_notification_for_attending_an_event()
    {
        $user = factory('App\User')->create();
        $event = factory('App\Event')->create();

        factory('App\Sticker')->create(['type' => 'atividade']);

        $this->assertCount(0, $user->notifications()->get());

        $user->attendedAnEvent($event,1);

        $this->assertCount(1, $user->fresh()->notifications()->get());
    }
}
