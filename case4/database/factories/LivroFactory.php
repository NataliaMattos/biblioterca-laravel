<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Livro::class, function (Faker $faker) {
    return [
        'isbn' => $faker->unique()->ean13,
        'titulo' => $faker->unique()->text,
        'ano' => $faker->randomDigit,
        'editora' => $faker->unique()->text,
    ];
});
