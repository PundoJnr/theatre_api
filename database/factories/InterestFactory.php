<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Interest;
use Faker\Generator as Faker;

$factory->define(App\Models\Interest::class, function (Faker $faker) {
    return [
        'name' => rtrim($faker->word(rand(2, 5)), "."),
        'description' => $faker->paragraphs(rand(3, 7), true)
    ];
});
