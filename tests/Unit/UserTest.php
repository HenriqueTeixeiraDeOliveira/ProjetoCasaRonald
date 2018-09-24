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
        $user = factory('App\User')->create();
        $school = factory('App\School')->create();

        factory('App\Sticker')->create(['type' => 'escola']);
        factory('App\Sticker')->create(['type' => 'livro']);
        factory('App\Sticker')->create(['type' => 'atividade']);

        $this->assertCount(0, $user->stickers()->get());

        $user->wentToSchool($school,1);

        $this->assertCount(1, $user->stickers()->get());
        $this->assertTrue($user->stickers()->get()->contains('type','escola'));
    }

    /** @test */
    public function an_user_can_be_awarded_for_reading_a_book()
    {
        $user = factory('App\User')->create();
        $book = factory('App\Book')->create();

        factory('App\Sticker')->create(['type' => 'escola']);
        factory('App\Sticker')->create(['type' => 'livro']);
        factory('App\Sticker')->create(['type' => 'atividade']);

        $this->assertCount(0, $user->stickers()->get());

        $user->readOneBook($book,1);

        $this->assertCount(1, $user->stickers()->get());
        $this->assertTrue($user->stickers()->get()->contains('type','livro'));
    }

    /** @test */
    public function an_user_can_be_awarded_for_doing_an_activity()
    {
        $user = factory('App\User')->create();
        $event = factory('App\Event')->create();

        factory('App\Sticker')->create(['type' => 'escola']);
        factory('App\Sticker')->create(['type' => 'livro']);
        factory('App\Sticker')->create(['type' => 'atividade']);

        $this->assertCount(0, $user->stickers()->get());

        $user->attendedAnEvent($event,1);

        $this->assertCount(1, $user->stickers()->get());
        $this->assertTrue($user->stickers()->get()->contains('type','atividade'));
    }
}
