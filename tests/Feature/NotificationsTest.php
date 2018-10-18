<?php

namespace Tests\Feature;

use App\Book;
use App\Event;
use App\School;
use App\Sticker;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class NotificationsTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function an_user_receives_a_notification_for_going_to_the_school()
    {
        $user = create(User::class);

        $school = create(School::class);

        create(Sticker::class,['type' => 'escola']);

        $this->assertCount(0, $user->notifications()->get());

        $user->wentToSchool($school,1);

        $this->assertCount(1, $user->fresh()->notifications()->get());
    }

    /** @test */
    public function an_user_receives_a_notification_for_reading_a_book()
    {
        $user = create(User::class);

        $book = create(Book::class);

        create(Sticker::class,['type' => 'livro']);

        $this->assertCount(0, $user->notifications()->get());

        $user->readOneBook($book,1);

        $this->assertCount(1, $user->fresh()->notifications()->get());
    }

    /** @test */
    public function an_user_receives_a_notification_for_attending_an_event()
    {
        $user = create(User::class);

        $event = create(Event::class);

        create(Sticker::class,['type' => 'atividade']);

        $this->assertCount(0, $user->notifications()->get());

        $user->attendedAnEvent($event,1);

        $this->assertCount(1, $user->fresh()->notifications()->get());
    }
}
