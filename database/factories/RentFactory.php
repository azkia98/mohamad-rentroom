<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Models\Rent;
use Carbon\Carbon;

$factory->define(Rent::class, function (Faker $faker) {
    $start_time = $faker->dateTimeBetween('now','+1 day');
    // $end_at = Carbon::parse($start_time)->addHours(rand(1,3));
    $end_at = Carbon::parse($start_time->format('Y-m-d H:i'))->addHours(rand(1,3));
    // $end_at = now()->parse();
    return [
        'room_id' => rand(1,15),
        'user_id' => rand(1,20),
        'lesson_id' => rand(1,15),
        'start_at' =>  $start_time,
        'end_at' =>  $end_at
    ];
});
