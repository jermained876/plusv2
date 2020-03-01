<?php

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create([
            "name" => "Awaiting Approval",
            "slug" => "Awaiting Approval"
        ]);

        Status::create([
            "name" => "Approved",
            "slug" => "Approved"
        ]);

        Status::create([
            "name" => "Rejected",
            "slug" => "Rejected"
        ]);

        Status::create([
            "name" => "Sold",
            "slug" => "Sold"
        ]);
        Status::create([
            "name" => "Remove",
            "slug" => "Remove"
        ]);
    }
}
