<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Subject::class, function (Faker $faker) {
      return [
          "name" => $faker->domainName,
          "created_by" => 1,
          "created_at" => now()
      ];
});
