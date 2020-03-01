<?php

use App\Models\Userdetails;
use App\Models\UserImage;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class,10)->create()->each(function($user){
            factory(Userdetails::class,1)->create([
                'user_id'=>$user->id
            ]);
            factory(UserImage::class,1)->create([
                'user_id'=>$user->id
            ]);
        });
    }
}
