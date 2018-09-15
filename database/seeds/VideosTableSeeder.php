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
            'watchable_type' => 'subject',
            'watchable_id' => 1,
            'url' => 'https://www.youtube.com/embed/VKztNiY5p5M'
        ]);

        factory('App\Video')->create([
            'user_id' => 1,
            'watchable_type' => 'advertisement',
            'watchable_id' => 3,
            'url' => 'https://www.youtube.com/embed/VKztNiY5p5M'
        ]);

        factory('App\Video')->create([
            'user_id' => 2,
            'watchable_type' => 'subject',
            'watchable_id' => 2,
            'url' => 'https://www.youtube.com/embed/VKztNiY5p5M'
        ]);

        factory('App\Video')->create([
            'user_id' => 2,
            'watchable_type' => 'advertisement',
            'watchable_id' => 2,
            'url' => 'https://www.youtube.com/embed/VKztNiY5p5M'
        ]);
    }
}


