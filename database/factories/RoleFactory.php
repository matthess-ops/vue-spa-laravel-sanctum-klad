<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */

use App\Role;
use Faker\Generator as Faker;

$factory->define(Role::class, function (Faker $faker, $userId,$role) {

    return [

        'user_id' => $userId,

        'role' => $role,


    ];
});
