<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index () {
        // getting data from database
        $sari_products = Product::all();
        // dd($all_products);
        return view("ecommerce.all-products",[
            "products" => $sari_products,
        ]);
    }




    public function show () {
        return view("ecommerce.product-detail");
    }
}
