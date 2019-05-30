<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Lesson;
use Faker\Generator as Faker;

$factory->define(Lesson::class, function (Faker $faker) {
    return [
        'title' => $faker->randomLetter
    ];
});
