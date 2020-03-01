<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            "name" => "Cellphones",
            "slug" => "Cellphones"
        ]);
        Category::create([
            "name" => "Cellphones Accessories",
            "slug" => "Cellphones-Accessories"
        ]);
        Category::create([
            "name" => "Desktops/Laptops",
            "slug" => "Desktops/Laptops"
        ]);
        Category::create([
            "name" => "Tv/Video/Audio",
            "slug" => "Tv-Video-Audio"
        ]);
        Category::create([
            "name" => "Portable Audio & Headphones",
            "slug" => "Portable-Audio-&-Headphones"
        ]);
        Category::create([
            "name" => "Cameras",
            "slug" => "Cameras"
        ]);
    }
}
