<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Event')->create(['name' => 'Aniversário do Tio Mayco']);
        factory('App\Event')->create(['name' => 'Festa Junina']);
        factory('App\Event')->create(['name' => 'Páscoa']);
        factory('App\Event')->create(['name' => 'Natal']);
        factory('App\Event')->create(['name' => 'Setembro Dourado']);
        factory('App\Event')->create(['name' => 'Dia do índio']);
    }
}