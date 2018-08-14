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
        'file' => $faker->randomElement([
            'https://techcrunch.com/wp-content/uploads/2018/02/spacex-falcon-heavy-181.jpg?w=730&crop=1',
            'https://e00-elmundo.uecdn.es/assets/multimedia/imagenes/2018/02/15/15186989335226.jpg',
            'https://icdn7.digitaltrends.com/image/spacex-bfr-earth-city-travel-elon-musk-11.jpg',
            'http://cdn3.ticbeat.com/src/uploads/2017/03/spacex-internet-espacio-810x456.jpg?x32709',
            'https://cdn.teslarati.com/wp-content/uploads/2018/08/ElonMusk_2017-embed.jpg'
        ]),
        'status' => $faker->randomElement(['DRAFT', 'PUBLISHED']),
    ];
});
