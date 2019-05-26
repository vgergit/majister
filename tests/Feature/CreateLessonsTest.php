<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateLessonsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function guests_may_not_create_lessons()
    {
      $this->expectException('Illuminate\Auth\AuthenticationException');
      $lesson = factory('App\Lesson')->make();

      // We don't need the object just its values
      $this->post('/lessons', $lesson->toArray());
    }

    /** @test */
    function an_authenticated_user_may_create_new_lessons()
    {
      // Signed in user
      $this->actingAs(factory('App\User')->create());

      $lesson = factory('App\Lesson')->make();

      // We don't need the object just is values
      $this->post('/lessons', $lesson->toArray());

      $response = $this->get($lesson->path());

      $response->assertSee($lesson->title)
               ->assertSee($lesson->content);
    }
}
