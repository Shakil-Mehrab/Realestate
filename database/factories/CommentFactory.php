<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'star' => $faker->numberBetween(1,5),                               
        'body' => $faker->paragraph,   
        'property_id' => function(){
            return App\Model\Property::all()->random();
        },
         'user_id' => function(){
            return App\User::all()->random();
        }
    ];
});
