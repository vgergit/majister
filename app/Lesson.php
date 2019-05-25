<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public function path()
    {
      return '/lessons/' . $this->id;
    }

    public function comments()
    {
      return $this->hasMany(Comment::class);
    }

    public function owner()
    {
      return $this->belongsTo(User::class, 'user_id');
    }
    
}
