<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\UserImage;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(UserImage::class, function (Faker $faker) {
    $name = $faker->word;
    return [
        "name" => $name,
        'slug' =>Str::slug($name,'-'),
        "user_id"=>function(){
            return User::all()->random();
        },
        "image_url"=>"https://res.cloudinary.com/jd999dawkins/image/upload/v1583039428/default-avatar.jpg"

    ];
});
