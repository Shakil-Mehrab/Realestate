<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Property::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'property_type' => $faker->word,
        'image' => $faker->imageUrl,
        'area' => $faker->randomDigit,
        'address' => $faker->address,                           
        'price' => $faker->numberBetween(100,1000),                              
        'detail' => $faker->paragraph,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->e164PhoneNumber,     
        'user_id' => function(){
            return App\User::all()->random();
        },
        'category_id' => function(){
            return App\Model\Category::all()->random();
        }
        
    ];
});
