<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Device;
use App\Models\Manufacturer;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Device::class, function (Faker $faker) {
    $name = $faker->word;
    return [

        'name'=>$name,
        'slug'=> Str::slug($name,'-'),
        'manufacturer_id'=>function(){
           return Manufacturer::all()->random();
        }
    ];
});
