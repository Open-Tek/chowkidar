<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Test::class, function (Faker $faker) {
    return [
    	"name" => "Test 1",
        "marks" => $faker->randomNumber(2),
        "negative_marking" => 1,
        "duration" => $faker->randomNumber(1),
        "start_date" => now(),
        "end_date" => $faker->dateTimeBetween('+0 days', '+1 week'),
        "created_by" => 1,
        "created_at" => now()
    ];
});
