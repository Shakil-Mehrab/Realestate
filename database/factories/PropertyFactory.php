<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Property::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'property_type' => $faker->word,
        'country' => $faker->country,                           
        'status' => $faker->word,
        'image' => $faker->imageUrl,
        'area' => $faker->randomDigit,
        'nong_of_kitchen' => $faker->numberBetween(1,3),
        'nong_of_bedroom' => $faker->numberBetween(5,10),
        'nong_of_bathroom' => $faker->numberBetween(2,4),
        'address' => $faker->address,                           
        'state' => $faker->city,
        'price' => $faker->numberBetween(100,1000),
        'location' => $faker->city,                                
        'detail' => $faker->paragraph,
        'checkbox' => $faker->word,
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->e164PhoneNumber,     
        'user_id' => function(){
            return App\User::all()->random();
        }
        
    ];
});
