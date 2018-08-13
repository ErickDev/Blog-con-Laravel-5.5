<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    $title = $faker->sentence(10); // Faker crea un título de 4 palabras
    return [
        'user_id' => rand(1, 20),
        'category_id' => rand(1, 20),
        'title' => $title,
        'slug' => str_slug($title),
        'excerpt' => $faker->text(200),
        'body' => $faker->text(500), // Faker crea un texto con 500 caracteres
        'file' => $faker->imageUrl($width = 1200, $height = 400),
        'status' => $faker->randomElement(['DRAFT', 'PUBLISHED']),
    ];
});
