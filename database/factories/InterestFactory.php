<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Interest;
use Faker\Generator as Faker;

$factory->define(App\Models\Interest::class, function (Faker $faker) {
    return [
        'title' => rtrim($faker->sentence(rand(5, 10)), "."),
        'description' => $faker->paragraphs(rand(3, 7), true)
    ];
});
