<?php

use Illuminate\Database\Seeder;
use App\Advertisement;

class AdvertisementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Advertisement::class)->create(['campaign' => 'McDia Feliz', 'sponsor' => 'McDonalds']);
        factory(Advertisement::class)->create(['campaign' => 'Setembro Dourado', 'sponsor' => 'Coniacc']);
        factory(Advertisement::class)->create(['campaign' => 'Bazar das Mães', 'sponsor' => 'Casa Ronald']);
    }
}
