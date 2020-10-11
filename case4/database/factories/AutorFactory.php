<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Autor::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'nascionalidade' => $faker->text,
    ];
});
