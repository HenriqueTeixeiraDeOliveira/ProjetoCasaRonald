<?php

use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Video')->create([
            'user_id' => 1,
            'watchable_type' => 'lesson',
            'watchable_id' => 1,
        ]);

        factory('App\Video')->create([
            'user_id' => 1,
            'watchable_type' => 'advertisement',
            'watchable_id' => 1,
        ]);

        factory('App\Video')->create([
            'user_id' => 2,
            'watchable_type' => 'lesson',
            'watchable_id' => 2,
        ]);

        factory('App\Video')->create([
            'user_id' => 2,
            'watchable_type' => 'advertisement',
            'watchable_id' => 2,
        ]);

        factory('App\Video')->create([
            'user_id' => 1,
            'watchable_type' => 'lesson',
            'watchable_id' => 3,
        ]);

        factory('App\Video')->create([
            'user_id' => 1,
            'watchable_type' => 'advertisement',
            'watchable_id' => 3,
        ]);

        factory('App\Video')->create([
            'user_id' => 2,
            'watchable_type' => 'lesson',
            'watchable_id' => 4,
        ]);

        factory('App\Video')->create([
            'user_id' => 2,
            'watchable_type' => 'lesson',
            'watchable_id' => 5,
        ]);


    }
}


