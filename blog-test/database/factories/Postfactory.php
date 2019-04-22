<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title'=>$faker->sentence(6,true),
        'body'=>$faker->paragraph(3,true)
    ];
});
