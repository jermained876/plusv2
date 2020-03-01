<?php

use App\Models\Promotion;
use Illuminate\Database\Seeder;

class PromotionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Promotion::create([
            "name" => "None",
            "slug" => "None"
        ]);

        Promotion::create([
            "name" => "BUY 1 GET 1 FREE",
            "slug" => "BUY-1-GET-1-FREE"
        ]);
        Promotion::create([
            "name" => "50 % OFF",
            "slug" => "50-%-OFF"
        ]);
    }
}
