<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class VideoTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_video_can_belong_to_a_lesson()
    {
        $video = factory('App\Video')->state('lesson')->create();
        $this->assertInstanceOf('App\Lesson', $video->watchable);
    }

    /** @test */
    public function a_video_can_belong_to_a_advertisement()
    {
        $video = factory('App\Video')->state('advertisement')->create();
        $this->assertInstanceOf('App\Advertisement', $video->watchable);
    }

    /** @test */
    public function a_video_has_an_owner()
    {
        $video = factory('App\Video')->create();
        $this->assertInstanceOf('App\User', $video->owner);
    }
}
