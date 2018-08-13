<?php

use Faker\Generator as Faker;

$factory->define(App\Tag::class, function (Faker $faker) {
    $name = $faker->unique()->word(5); // Faker crea una palabra de 5 caracteres
    return [
        'name' => $name,
        'slug' => str_slug($name),
    ];
});
