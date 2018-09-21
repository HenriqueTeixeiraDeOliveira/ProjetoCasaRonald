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

        factory('App\Sticker')->create(['type' => 'escola']);

        $this->assertCount(0, $user->notifications()->get());

        $user->wentToSchool();

        $this->assertCount(1, $user->fresh()->notifications()->get());
    }

    /** @test */
    public function an_user_receives_a_notification_for_reading_a_book()
    {
        $user = factory('App\User')->create();

        factory('App\Sticker')->create(['type' => 'livro']);

        $this->assertCount(0, $user->notifications()->get());

        $user->readOneBook();

        $this->assertCount(1, $user->fresh()->notifications()->get());
    }

    /** @test */
    public function an_user_receives_a_notification_for_doing_an_activity()
    {
        $user = factory('App\User')->create();

        factory('App\Sticker')->create(['type' => 'atividade']);

        $this->assertCount(0, $user->notifications()->get());

        $user->didAnActivity();

        $this->assertCount(1, $user->fresh()->notifications()->get());
    }
}
