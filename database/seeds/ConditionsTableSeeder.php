<?php

use App\Models\Condition;
use Illuminate\Database\Seeder;

class ConditionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Condition::create([
            "name" => "New",
            "slug" => "New"
        ]);
        Condition::create([
            "name" => "Refurbished",
            "slug" => "Refurbished"
        ]);
        Condition::create([
            "name" => "Used Very Good",
            "slug" => "Used-Very-Good"
        ]);
        Condition::create([
            "name" => "Used Good",
            "slug" => "Used-Good"
        ]);

        Condition::create([
            "name" => "Damaged",
            "slug" => "Damaged"
        ]);
    }
}
