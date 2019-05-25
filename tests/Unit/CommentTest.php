<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CommentTest extends TestCase
{
    use RefreshDatabase;
    
    /** @test */
    function a_comment_has_an_owner()
    {
      $comment = factory('App\Comment')->create();

      $this->assertInstanceOf('App\User', $comment->owner);
    }

}
