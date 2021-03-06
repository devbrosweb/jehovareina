<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
      'title' => $faker->sentence(rand(15, 20)),
      'author_id' => (rand(1,3)),
      'excerpt' => $faker->text(rand(250, 300)),
      'body' => $faker->paragraphs(rand(10, 15), true),
      'slug' => $faker->slug(),
      'view_count' => $faker->numberBetween(10, 100),

    ];
});
