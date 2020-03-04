<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Models\Promotion;
use Illuminate\Http\Request;

class MainpageController extends Controller
{
    public function buyone()
    {
        return Promotion::findOrFail(2)->products->take(6);
    }
    public function sale()
    {
        return Promotion::findOrFail(3)->products->take(6);
    }

    public function newproduct()
    {
        return ProductResource::collection(Product::all()->take(6));
    }
}
