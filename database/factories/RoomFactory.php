<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Room;
use Faker\Generator as Faker;

$factory->define(Room::class, function (Faker $faker) {
    return [
        'name' => $faker->randomNumber(),
        'capacity' => rand(10,50),
        'projector' => $faker->boolean(30)
    ];
});
