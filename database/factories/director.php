<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Director::class, function (Faker $faker) {
    return [
      'first_name' => $faker->sentence,
      'last_name' => $faker->numberBetween(1,10),
      'release_date' => $faker->date,
      'birthDate' => $faker->date,
      'genre_id' => App\Director::inRandomOrder()->first()->id
    ];
});
