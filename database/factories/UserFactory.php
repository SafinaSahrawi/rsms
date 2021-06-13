<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Service;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Service::class, function (Faker $faker) {
    return [
        'deviceType' => $faker->randomElement($array = array ('cpu','laptop','smartphone','printer','others')),
        'brand' => $faker->randomElement($array = array ('hp','acer','samsung','macbook','lenovo','canon','others')),
        'serialNo' => $faker->bothify('???#?##??'),
        'faulty' => $faker->randomElement($array = array ('screen','motherboard','waterDamage','others')),
        'cost' => $faker->numberBetween($min = 50, $max = 1000),        
        'comment' => $faker->text($maxNbChars = 100),
        'status' => $faker->randomElement($array = array ('pending','inProgress','completed')),
        'agreement' => $faker->boolean($chanceOfGettingTrue = 50),
    ];
});