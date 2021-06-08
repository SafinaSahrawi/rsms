<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        //generate fake data
       'name'=>$faker->sentence(5),
       'username'=>$faker->sentence(5),
       'email'=>$faker->sentence(15),
       'contact'=>$faker->text(),
       'address'=>$faker->name,
    ];
});