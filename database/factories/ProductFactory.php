<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'detail' => $faker->paragraph,
        'price' => $faker->numberBetween(50, 1000),
        'stock' => $faker->randomDigit,
        'discount' => $faker->numberBetween(2, 30),
    ];
});
