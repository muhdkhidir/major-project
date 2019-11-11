<?php
use Faker\Generator as Faker;
$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'title' => $faker->text(50),

        'organization'  => $faker->text(200),
        'location'  => $faker->text(200),
        'caller'  => $faker->text(200),
        'origin'  => $faker->text(200),
        'completion'  => $faker->text(200),

        'body'  => $faker->text(200)
    ];
});