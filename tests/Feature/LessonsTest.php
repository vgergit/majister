<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LessonsTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    public function a_user_can_browse_all_lessons()
    {
        $lesson = factory('App\Lesson')->create();

        $response = $this->get('/lessons');
        $response->assertSee($lesson->title);
    }

    /** @test */
    public function a_user_can_watch_a_lesson()
    {
        $lesson = factory('App\Lesson')->create();

        $response = $this->get('/lessons/' . $lesson->id);
        $response->assertSee($lesson->title);
    }
}
