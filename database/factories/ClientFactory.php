<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */

use App\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'firstName' => $faker->firstName,
        'lastName' => $faker->lastName,
        'email' => $faker->email,
        'phoneNumber' => $faker->phoneNumber,
        'address' => $faker->address,
        'city' => $faker->city,
        'country' => $faker->country,
        
    ];
});
