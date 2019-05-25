<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $guarded = [];

    public function path()
    {
      return '/lessons/' . $this->id;
    }

    public function comments()
    {
      return $this->hasMany(Comment::class);
    }

    public function teacher()
    {
      return $this->belongsTo(User::class, 'user_id');
    }

    public function addComment($comment)
    {
      $this->comments()->create($comment);
    }

}
