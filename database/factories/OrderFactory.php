<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'user_id' => App\User::get('id')->random(),
        'total_amount' => $faker->randomFloat(3, 2, 5000),
        'tax_amount' => $faker->randomFloat(3, 2, 1000),
        'created_at' => now(),
    ];
});
