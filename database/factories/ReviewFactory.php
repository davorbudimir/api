<?php

use Faker\Generator as Faker;
use App\Models\Product;

$factory->define(App\Models\Review::class, function (Faker $faker) {
    return [
        'product_id' => function(){
            return Product::all()->random();
        },
        'customer' => $faker->name,
        'review' => $faker->paragraph,
        'star' => $faker->numberBetween(100,1000)
    ];
});
