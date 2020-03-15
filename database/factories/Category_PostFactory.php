<?php

use Faker\Generator as Faker;

$factory->define(App\Category_Post::class, function (Faker $faker) {
    return [
        'category_id' => $faker->numberBetween($min = 1, $max = 10),
        'post_id' => $faker->numberBetween($min = 1, $max = 30),
    ];
});
