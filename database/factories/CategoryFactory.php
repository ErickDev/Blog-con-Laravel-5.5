<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    $name = $faker->sentence(4); // Faker crea un título de 4 palabras
    return [
        'name' => $name,
        'slug' => str_slug($name),
        'body' => $faker->text(500), // Faker crea un texto con 500 caracteres
    ];
});
