<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LessonTest extends TestCase
{
  use RefreshDatabase;

  /** @test */
  function a_lesson_has_comments()
  {
    $lesson = factory('App\Lesson')->create();

    $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $lesson->comments);
  }

  /** @test */
  function a_lesson_has_a_teacher()
  {
    $lesson = factory('App\Lesson')->create();

    $this->assertInstanceOf('App\User', $lesson->teacher);
  }

  /** @test */
  public function a_lesson_can_add_a_comment()
  {
    $lesson = factory('App\Lesson')->create();

    $lesson->addComment([
      'content' => 'a_lesson_can_add_a_comment test',
      'user_id' => 1,
      'creation_date' => now()
    ]);

    $this->assertCount(1, $lesson->comments);
  }

}
