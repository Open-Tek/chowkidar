<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\TestSubjects::class, function (Faker $faker) {
    return [
        "test_id" => 1,
        "subject_id" => 1,
        "marks" => $faker->randomNumber(2),
        "created_by" => 1,
        "created_at" => now()
    ];
});
