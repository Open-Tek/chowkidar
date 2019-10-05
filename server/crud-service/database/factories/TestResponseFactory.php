<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\TestResponse::class, function (Faker $faker) {
    return [
        "test_id" => 1,
        "student_id" => 1,
        "marks" => $faker->randomNumber(2),
        "created_by" => 1,
        "created_at" => now()
    ];
});