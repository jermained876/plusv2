<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            "name" => "Admin",
            "slug" => "Admin"
        ]);
        Role::create([
            "name" => "Owner",
            "slug" => "Owner"
        ]);
        Role::create([
            "name" => "Customer",
            "slug" => "Customer"
        ]);
        Role::create([
            "name" => "Supplier",
            "slug" => "Supplier"
        ]);
    }
}
