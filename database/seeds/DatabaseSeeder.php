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
        DB::table('professors')->delete();
        DB::table('students')->delete();
        DB::table('managers')->delete();
        DB::table('roles')->delete();
        DB::table('stickers')->delete();
        DB::table('videos')->delete();
        DB::table('fields')->delete();
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


        $this->call(PermissionsTableSeeder::class);         // NO DEPENDENCY
        $this->call(RolesTableSeeder::class);               // PERMISSION DEPENDENCY

        $this->call(SchoolsTableSeeder::class);             // NO DEPENDENCY
        $this->call(BooksTableSeeder::class);               // NO DEPENDENCY
        $this->call(EventsTableSeeder::class);              // NO DEPENDENCY
        $this->call(StickersTableSeeder::class);            // NO DEPENDENCY

        $this->call(FieldsTableSeeder::class);              // NO DEPENDENCY
        $this->call(SubjectsTableSeeder::class);            // FIELD DEPENDENCY

        $this->call(UsersTableSeeder::class);               // ROLES, SCHOOL, BOOK and EVENT DEPENDENCY

        $this->call(TagsTableSeeder::class);                // NO DEPENDENCY

        $this->call(AdvertisementsTableSeeder::class);      // TAG DEPENDENCY
        $this->call(LessonsTableSeeder::class);             // TAG, SUBJECT, PROFESSOR(USER) DEPENDENCY
        $this->call(VideosTableSeeder::class);              // USER, ADVERTISEMENT and LESSONS DEPENDENCY


    }
}
