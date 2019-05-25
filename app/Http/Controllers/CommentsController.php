<?php

namespace App\Http\Controllers;

use App\Lesson;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function store(Lesson $lesson)
    {
      $lesson->addComment([
        'content' => request('content'),
        'user_id' => auth()->id(),
        'creation_date' => now()
      ]);

      return back();
    }
}
