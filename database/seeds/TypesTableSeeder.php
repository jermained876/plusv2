<?php

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            "Name" => "Audio",
            "Slug" => "Audio"
        ]);
        Type::create([
            "Name" => "Cables & Chargers",
            "Slug" => "Cables-&-Chargers"
        ]);
        Type::create([
            "name" => "Cases",
            "slug" => "Cases"
        ]);
        Type::create([
            "name" => "Holders & Mounts",
            "slug" => "Holders-&-Mounts"
        ]);
        Type::create([
            "name" => "Powerbanks",
            "slug" => "Powerbanks"
        ]);
        Type::create([
            "name" => "Storage",
            "slug" => "Storage"
        ]);
        Type::create([
            "name" => "Tools & Parts",
            "slug" => "Tools-&-Parts"
        ]);
        Type::create([
            "name" => "Phone",
            "slug" => "Phone"
        ]);
        Type::create([
            "name" => "Other",
            "slug" => "Other"
        ]);
    }
}
