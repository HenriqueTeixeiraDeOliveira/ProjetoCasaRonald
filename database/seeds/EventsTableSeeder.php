<?php

use Illuminate\Database\Seeder;
use App\Event;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Event::class)->create(['name' => 'Aniversário do Tio Mayco']);
        factory(Event::class)->create(['name' => 'Festa Junina']);
        factory(Event::class)->create(['name' => 'Páscoa']);
        factory(Event::class)->create(['name' => 'Natal']);
        factory(Event::class)->create(['name' => 'Setembro Dourado']);
        factory(Event::class)->create(['name' => 'Dia do índio']);
    }
}
