<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Lesson;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Lesson Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| the lessons. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/


$factory->define(Lesson::class, function (Faker $faker) {
    return [
      'user_id' => function() {
        return factory('App\User')->create()->id;
      },
      'title' => $faker->sentence,
      'content' => $faker->paragraph,
      'creation_date' => now(),
      'thumbnail' => $faker->image('public/storage/images',200,200,null,false)
    ];
});
