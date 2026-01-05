<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\TestController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
Route::get("/", function () {
    return redirect()->route("shop.index");
})->name("home");


// Route::get('/', [HomeController::class,'index'])->name("home");
Route::get('/shop', [ShopController::class , 'index'])->name("shop.index");
Route::get('/shop/1', [ShopController::class , 'show'])->name("shop.show");
Route::get("/about-us",[HomeController::class, 'aboutPage'])->name("about");
Route::get("/contact" , [HomeController::class,'contactPage'])->name("contact");
Route::get("/services", [HomeController::class,"servicesPage"])->name("services");

Route::get("/login" , [HomeController::class, 'loginPage'])->name("login.page");



// Route::get("/test",function () {
//     $products = Product::all();
//     // return "test";
//     // return view("something");
//     // return response()->json($products);
//     // return redirect()->route("contact");
// });


Route::get("test", [TestController::class,"index"]);
