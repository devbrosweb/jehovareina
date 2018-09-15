<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'title' => $faker->word(rand(2,3)),
        'slug' => $faker->slug()
    ];
});
