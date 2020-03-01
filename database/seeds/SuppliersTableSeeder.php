<?php

use App\Models\Supplier;
use Illuminate\Database\Seeder;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Supplier::class,1)->create(["supplier_code"=>"WAB"]);
        factory(Supplier::class,1)->create(["supplier_code"=>"WAF"]);
        factory(Supplier::class,1)->create(["supplier_code"=>"WAC"]);
        factory(Supplier::class,1)->create(["supplier_code"=>"WAM"]);
    }
}
