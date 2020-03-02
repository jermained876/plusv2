<?php

use App\Models\Image;
use App\Models\Product;
use App\Models\ProductComment;
use App\User;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        Product::create([


            "name" => 'Google Pixel 128GB SilverWhite',
            'slug' =>'Google Pixel 128GB SilverWhite ',
            'description'=>'G-2PW4100 (Unlocked) GSM World Phone BW5185',
                'user_id'=>'1',
                'condition_id'=>'4',
               'status_id'=> '2',
               'category_id'=> '1',




        ])->each(function($product){

        factory(ProductComment::class,1)->create([
            'product_id' => $product->id,
        ]);
       });


       Product::create([


        "name" => 'LG ARISTO ',
        'slug' =>'LG ARISTO',
        'description'=>'(METROPCS) CLEAN ESN, PARTS ONLY , damaged AND LOCKED',
            'user_id'=>'1',
            'condition_id'=>'5',
           'status_id'=> '2',
           'category_id'=> '1',




    ])->each(function($product){

    factory(ProductComment::class,1)->create([
        'product_id' => $product->id,
    ]);
   });




   Product::create([


    "name" => 'ACER ASPIRE 5251-1007 LAPTOP',
    'slug' =>'ACER ASPIRE 5251-1007 LAPTOP',
    'description'=>'WORKING FOR PARTS OR REPAIR',
        'user_id'=>'2',
        'condition_id'=>'5',
       'status_id'=> '2',
       'category_id'=> '3',




])->each(function($product){

factory(ProductComment::class,1)->create([
    'product_id' => $product->id,
]);
});

Product::create([


    "name" => 'Lenovo N22 11.6 Laptop Computer Intel',
    'slug' =>'Lenovo N22 11.6 Laptop Computer Intel',
    'description'=>'4GB 60GB SSD Webcam Wifi Windows 10 PC',
        'user_id'=>'2',
        'condition_id'=>'2',
       'status_id'=> '2',
       'category_id'=> '3',




])->each(function($product){

factory(ProductComment::class,1)->create([
    'product_id' => $product->id,
]);
});



Product::create([


    "name" => 'A20 CASE',
    'slug' =>'A20 CASE',
    'description'=>'A20 CASE',
        'user_id'=>'3',
        'condition_id'=>'1',
       'status_id'=> '2',
       'category_id'=> '2',




])->each(function($product){

factory(ProductComment::class,1)->create([
    'product_id' => $product->id,
]);
});




Product::create([


    "name" => 'J4 CASE',
    'slug' =>'J4 CASE',
    'description'=>'J4 CASE',
        'user_id'=>'3',
        'condition_id'=>'1',
       'status_id'=> '2',
       'category_id'=> '2',




])->each(function($product){

factory(ProductComment::class,1)->create([
    'product_id' => $product->id,
]);
});
















    }
}
