<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index () {
        $all_products = Product::all();
        // dd($products);
        return view("ecommerce.all-products",[
            "products" => $all_products,
        ]);
    }


    public function show () {
        return view("ecommerce.product-detail");
    }
}
