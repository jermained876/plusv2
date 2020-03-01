<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Userdetails;
use Faker\Generator as Faker;

$factory->define(Userdetails::class, function (Faker $faker) {
    return [

        'phone'=>$faker->phoneNumber,
        'address'=>$faker->address
    ];
});
