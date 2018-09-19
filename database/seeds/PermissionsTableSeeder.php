<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Permission')->create(['name' => 'create-sticker', 'description' => 'Can create a Sticker']);
        factory('App\Permission')->create(['name' => 'watch-lesson', 'description' => 'Can watch a lesson']);
        factory('App\Permission')->create(['name' => 'upload-lesson', 'description' => 'Can upload a lesson']);
    }
}
