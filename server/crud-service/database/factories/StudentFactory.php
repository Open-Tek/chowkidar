<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Student::class, function (Faker $faker) {
      return [
          "user_id" => factory(\App\User::class)->create()->id,
          "college" => $faker->company,
          "doj" => \Carbon\Carbon::today(),
          "created_at" => now(),
          "created_by" => 1
      ];
});
