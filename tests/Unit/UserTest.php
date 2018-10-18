<?php

namespace Tests\Unit;

use App\Book;
use App\Event;
use App\School;
use App\Sticker;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function an_user_can_be_awarded_for_going_to_the_school()
    {
        $user = create(User::class);
        $school = create(School::class);

        create(Sticker::class,['type' => 'escola']);
        create(Sticker::class,['type' => 'livro']);
        create(Sticker::class,['type' => 'atividade']);

        $this->assertCount(0, $user->stickers()->get());

        $user->wentToSchool($school,1);

        $this->assertCount(1, $user->stickers()->get());
        $this->assertTrue($user->stickers()->get()->contains('type','escola'));
    }

    /** @test */
    public function an_user_can_be_awarded_for_reading_a_book()
    {
        $user = create(User::class);
        $book = create(Book::class);

        create(Sticker::class,['type' => 'escola']);
        create(Sticker::class,['type' => 'livro']);
        create(Sticker::class,['type' => 'atividade']);

        $this->assertCount(0, $user->stickers()->get());

        $user->readOneBook($book,1);

        $this->assertCount(1, $user->stickers()->get());
        $this->assertTrue($user->stickers()->get()->contains('type','livro'));
    }

    /** @test */
    public function an_user_can_be_awarded_for_doing_an_activity()
    {
        $user = create(User::class);
        $event = create(Event::class);

        create(Sticker::class,['type' => 'escola']);
        create(Sticker::class,['type' => 'livro']);
        create(Sticker::class,['type' => 'atividade']);

        $this->assertCount(0, $user->stickers()->get());

        $user->attendedAnEvent($event,1);

        $this->assertCount(1, $user->stickers()->get());
        $this->assertTrue($user->stickers()->get()->contains('type','atividade'));
    }
}
