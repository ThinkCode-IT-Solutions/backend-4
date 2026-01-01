<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index () {
        // getting data from database
        $all_products = Product::latest()->get();
        // dd($all_products);
        return view("ecommerce.all-products",[
            "products" => $all_products,
        ]);
    }




    public function show () {
        return view("ecommerce.product-detail");
    }
}
