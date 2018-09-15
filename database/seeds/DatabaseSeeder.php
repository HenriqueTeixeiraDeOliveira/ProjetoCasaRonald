<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('users')->truncate();
        DB::table('videos')->truncate();
        DB::table('subjects')->truncate();
        DB::table('advertisements')->truncate();

        $this->call(SubjectsTableSeeder::class);
        $this->call(AdvertisementsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(VideosTableSeeder::class);
    }
}
