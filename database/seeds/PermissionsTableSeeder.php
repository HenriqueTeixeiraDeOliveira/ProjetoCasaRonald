<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Permission::class)->create(['name' => 'create-sticker', 'description' => 'Can create a Sticker']);
        factory(Permission::class)->create(['name' => 'watch-lesson', 'description' => 'Can watch a lesson']);
        factory(Permission::class)->create(['name' => 'upload-lesson', 'description' => 'Can upload a lesson']);
    }
}
