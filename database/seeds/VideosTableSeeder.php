<?php

use Illuminate\Database\Seeder;
use App\Video;
class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Video::class)->create([
            'user_id' => 1,
            'watchable_type' => 'lesson',
            'watchable_id' => 1,
        ]);

        factory(Video::class)->create([
            'user_id' => 1,
            'watchable_type' => 'advertisement',
            'watchable_id' => 1,
        ]);

        factory(Video::class)->create([
            'user_id' => 2,
            'watchable_type' => 'lesson',
            'watchable_id' => 2,
        ]);

        factory(Video::class)->create([
            'user_id' => 2,
            'watchable_type' => 'advertisement',
            'watchable_id' => 2,
        ]);

        factory(Video::class)->create([
            'user_id' => 1,
            'watchable_type' => 'lesson',
            'watchable_id' => 3,
        ]);

        factory(Video::class)->create([
            'user_id' => 1,
            'watchable_type' => 'advertisement',
            'watchable_id' => 3,
        ]);

        factory(Video::class)->create([
            'user_id' => 2,
            'watchable_type' => 'lesson',
            'watchable_id' => 4,
        ]);

        factory(Video::class)->create([
            'user_id' => 2,
            'watchable_type' => 'lesson',
            'watchable_id' => 5,
        ]);


    }
}


