<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Agent::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->e164PhoneNumber,     
        'address' => $faker->address, 
        'image' => $faker->imageUrl,                          
        'detail' => $faker->paragraph,
        'user_id' => function(){
            return App\User::all()->random();
        }
    ];
});
