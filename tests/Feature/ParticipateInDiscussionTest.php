<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ParticipateInDiscussionTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function an_authenticated_user_may_participate_in_discussions()
    {
      $user = factory('App\User')->create();

      // Sets the currrently logged in user for the application
      $this->be($user);

      $lesson = factory('App\Lesson')->create();

      $comment = factory('App\Comment')->create();

      $this->post('/lessons/'.$lesson->id.'/comments', $comment->toArray());

      // Test visibility of the Comment
      $response = $this->get($lesson->path());
      $response->assertSee($comment->content);

    }

}
