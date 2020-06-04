<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\customer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'address' => $faker->address,
        'phoneno'  => $faker->phoneNumber,
        'cnic' => $faker->creditCardNumber,
    ];
});
