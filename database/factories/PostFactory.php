<?php

use Carbon\Carbon;
use Faker\Provider\DateTime;
use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min = 1, $max = 40),
        'title' => $faker->sentence(6),
        'content' => $faker->paragraph
    ];
});
