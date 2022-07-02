<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Fornecedor;
use Faker\Generator as Faker;

$factory->define(Fornecedor::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'site' => $faker->url,
        'telefone' => $faker->tollFreePhoneNumber,
        'email' => $faker->unique()->email,
        'uf' => $faker->regexify('[A-Z]{2}'),
    ];
});
