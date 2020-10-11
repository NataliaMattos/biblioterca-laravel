<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Categoria::class, function (Faker $faker) {
    return [
        'codigo' => $faker->unique()->randomDigit,
        'descricao' => $faker->unique()->text,
    ];
});
