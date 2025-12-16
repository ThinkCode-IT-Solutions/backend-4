<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class,'index'])->name("home");
Route::get("/about-us",[HomeController::class, 'aboutPage'])->name("about");
Route::get("/contact" , [HomeController::class,'contactPage'])->name("contact");
Route::get("/services", [HomeController::class,"servicesPage"])->name("services");

Route::get("/login" , [HomeController::class, 'loginPage'])->name("login.page");

