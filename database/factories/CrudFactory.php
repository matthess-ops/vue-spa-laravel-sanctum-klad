<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Crud;
use Faker\Generator as Faker;

$factory->define(Crud::class, function (Faker $faker) {
    return [
        'firstname' => $this->faker->firstname,
        'lastname' => $this->faker->lastname,
    ];
});
