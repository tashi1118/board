<?php

use Carbon\Carbon;
use Faker\Provider\DateTime;
use Faker\Generator as Faker;

$factory->define(App\Response::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min = 1, $max = 40),
        'post_id' => $faker->numberBetween($min = 1, $max = 30),
        'content' => $faker->paragraph
    ];
});
