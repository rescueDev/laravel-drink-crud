<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Drink;
use Faker\Generator as Faker;

$factory->define(Drink::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'alcoholContent' => $faker->randomFloat(2, 0, 100),
        'price' => rand(5, 20),
    ];
});
