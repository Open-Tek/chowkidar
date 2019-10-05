<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\TestQuestions::class, function (Faker $faker) {
    return [
        "test_id" => 1,
        "question_id" => 1,
        "created_by" => 1,
        "created_at" => now()
    ];
});