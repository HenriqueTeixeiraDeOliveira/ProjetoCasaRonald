<?php

use Illuminate\Database\Seeder;

class AdvertisementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Advertisement')->create(['campaign' => 'McDia Feliz', 'sponsor' => 'McDonalds']);
        factory('App\Advertisement')->create(['campaign' => 'Setembro Dourado', 'sponsor' => 'Coniacc']);
        factory('App\Advertisement')->create(['campaign' => 'Bazar das Mães', 'sponsor' => 'Casa Ronald']);
    }
}
