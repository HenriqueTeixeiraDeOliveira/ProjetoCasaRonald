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

        DB::table('users')->delete();
        DB::table('roles')->delete();
        DB::table('stickers')->delete();
        DB::table('videos')->delete();
        DB::table('subjects')->delete();
        DB::table('advertisements')->delete();
        DB::table('lessons')->delete();
        DB::table('permissions')->delete();
        DB::table('schools')->delete();
        DB::table('books')->delete();
        DB::table('events')->delete();
        DB::table('actions')->delete();
        DB::table('role_user')->delete();
        DB::table('permission_role')->delete();
        DB::table('sticker_user')->delete();

        $this->call(SubjectsTableSeeder::class);
        $this->call(AdvertisementsTableSeeder::class);
        $this->call(LessonsTableSeeder::class);
        $this->call(StickersTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(BooksTableSeeder::class);
        $this->call(EventsTableSeeder::class);
        $this->call(SchoolsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(VideosTableSeeder::class);
    }
}
