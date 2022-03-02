<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'product_name' => $faker->lastName,
        'product_code' => $faker->bankAccountNumber,
        'product_amount' => $faker->randomDigit,

        
    ];
});