<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function an_user_can_be_awarded_for_going_to_the_school()
    {
        factory('App\Sticker')->create(['type' => 'escola']);
        factory('App\Sticker')->create(['type' => 'livro']);
        factory('App\Sticker')->create(['type' => 'atividade']);

        $user = factory('App\User')->create();

        $this->assertCount(0, $user->stickers()->get());

        $user->wentToSchool();

        $this->assertCount(1, $user->stickers()->get());
        $this->assertTrue($user->stickers()->get()->contains('type','escola'));
    }

    /** @test */
    public function an_user_can_be_awarded_for_reading_a_book()
    {
        factory('App\Sticker')->create(['type' => 'escola']);
        factory('App\Sticker')->create(['type' => 'livro']);
        factory('App\Sticker')->create(['type' => 'atividade']);

        $user = factory('App\User')->create();

        $this->assertCount(0, $user->stickers()->get());

        $user->readOneBook();

        $this->assertCount(1, $user->stickers()->get());
        $this->assertTrue($user->stickers()->get()->contains('type','livro'));
    }

    /** @test */
    public function an_user_can_be_awarded_for_doing_an_activity()
    {
        factory('App\Sticker')->create(['type' => 'escola']);
        factory('App\Sticker')->create(['type' => 'livro']);
        factory('App\Sticker')->create(['type' => 'atividade']);

        $user = factory('App\User')->create();

        $this->assertCount(0, $user->stickers()->get());

        $user->didAnActivity();

        $this->assertCount(1, $user->stickers()->get());
        $this->assertTrue($user->stickers()->get()->contains('type','atividade'));
    }
}
