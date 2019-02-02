<?php

use App\Model\Property;
use Faker\Generator as Faker;

$factory->define(App\Model\Review::class, function (Faker $faker) {
      return [
        'property_id' => function(){
            return Property::all()->random();
        }, 
        'customer' => $faker->name,
        'review' => $faker->paragraph,
        'star' => $faker->numberBetween(0,5)
    ];
});
