<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use App\Models\Condition;
use App\Models\Device;
use App\Models\Image;
use App\Models\Manufacturer;
use App\Models\Product;
use App\Models\Promotion;
use App\Models\Status;
use App\Models\Supplier;
use App\Models\Type;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {
    $name= $faker->word;
    return [

        "name" => $name,
        'slug' =>Str::slug($name,'-'),
        'description'=>$faker->sentence,
        'user_id'=> function(){
            return User::all()->random();
        },
            'condition_id'=> function(){
                return Condition::all()->random();
            },
           'status_id'=> function(){
            return Status::all()->random();
        },
           'category_id'=> function(){
            return Category::all()->random();
        },


    ];
});
