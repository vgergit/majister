<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReviewLessonsTest extends TestCase
{

    use RefreshDatabase;
    /** @test */
    public function a_user_can_browse_all_lessons()
    {
        $lesson = factory('App\Lesson')->create();

        $response = $this->get('/lessons/');
        $response->assertSee($lesson->title);
    }

    /** @test */
    public function a_user_can_watch_a_lesson()
    {
        $lesson = factory('App\Lesson')->create();

        $response = $this->get('/lessons/' . $lesson->id);
        $response->assertSee($lesson->title);
    }

    /** @test */
    public function a_user_can_read_comments_associated_with_a_lesson()
    {
        $lesson = factory('App\Lesson')->create();

        $comment = factory('App\Comment')->create(['lesson_id' => $lesson->id]);
        // Given a lesson with comments when viewing
        $response = $this->get('/lessons/' . $lesson->id);
        // the lesson one should see the comments
        $response->assertSee($comment->content);
    }

}
