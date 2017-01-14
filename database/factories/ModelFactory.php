<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\UnidadeEnsino::class, function (Faker\Generator $faker) {
    return [
        'nome_fantasia' => $faker->name,
        'nome_pj' => $faker->name,
        'rua' => $faker->streetName,
        'numero' => $faker->buildingNumber,
        'cep' => $faker->postcode,
        'complemento' => $faker->secondaryAddress  ,
        'bairro' => $faker->name,
        'cidade' => $faker->city,
        'uf_id' => rand(1, 27),
        'telefone' => $faker->phoneNumber ,
        'cnpj' => $faker->randomNumber(8),
        'tipo' => $faker->lexify('Tipo ???'),
        'user_id' => \App\User::all()->random()->id,

    ];
});

$factory->define(App\Espaco::class, function (Faker\Generator $faker) {
    return [


        //$user_ids = \DB::table('users')->select('id')->get();
        //$user_id = $faker->randomElement($user_ids)->id;

        'nome' => $faker->name,
        'descricao' => $faker->realText(),
        'tipo_cobranca' => $faker->lexify('Tipo ???'),
        'valor' => $faker->randomFloat(2,0,9999),
        //'unidadeEnsino_id' => $faker->rand(1, 5)  ,
        //'unidadeEnsino_id'  => random_int(\DB::table('unidades_ensino')->min('id'), \DB::table('unidades_ensino')->max('id')),
        'unidadeEnsino_id'  => \App\UnidadeEnsino::all()->random()->id,
    ];
});






