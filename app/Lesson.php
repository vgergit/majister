<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public function path()
    {
      return '/lessons/' . $this->id;
    }
}
