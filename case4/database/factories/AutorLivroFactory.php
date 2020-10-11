<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\AutorLivro::class, function (Faker $faker) {
    return [
        'descricao' => $faker->unique()->text,
    ];
});
