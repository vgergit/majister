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

      // We don't need the object just its values
      $lesson = factory('App\Lesson')->make();

      $this->post('/lessons', $lesson->toArray());
    }

    /** @test */
    function guests_cannot_see_the_create_lesson_page()
    {
      $this->expectException('Illuminate\Auth\AuthenticationException');

      $this->get('/lessons/create')
        ->assertRedirect('/login');
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
