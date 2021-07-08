<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\OrderLine;
use Faker\Generator as Faker;

$factory->define(OrderLine::class, function (Faker $faker) {
    return [
        'meal_id' => App\Meal::get('id')->random(),
        'order_id' => App\Order::get('id')->random(),
        'quantity_ordered' => $faker->randomDigitNotNull,
        'price_each' => $faker->randomFloat(3, 2, 1000),
        'created_at' => now(),
    ];
});
