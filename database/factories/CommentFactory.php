<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Comment;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Comment Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| the comments table. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/


$factory->define(Comment::class, function (Faker $faker) {
    return [
      'user_id' => function() {
        return factory('App\User')->create()->id;
      },
      'lesson_id' => function() {
        return factory('App\Lesson')->create()->id;
      },
      'content' => $faker->paragraph,
      'creation_date' => now()
    ];
});
