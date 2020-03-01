<?php

use App\Models\Manufacturer;
use Illuminate\Database\Seeder;

class ManufactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Manufacturer::create([
            "name" => "Alcatel",
            "slug" => "Alcatel"
        ]);
        Manufacturer::create([
            "name" => "Apple",
            "slug" => "Apple"
        ]);
        Manufacturer::create([
            "name" => "Huawei",
            "slug" => "Huawei"
        ]);
        Manufacturer::create([
            "name" => "LG",
            "slug" => "LG"
        ]);
        Manufacturer::create([
            "name" => "Samsung",
            "slug" => "Samsung"
        ]);
        Manufacturer::create([
            "name" => "ZTE",
            "slug" => "ZTE"
        ]);
    }
}
