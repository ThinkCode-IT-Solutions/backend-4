<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('shahzad');
    }

    public function aboutPage()
    {
        return view("about");
    }


    public function contactPage()
    {
        return view("contact");
    }

    public function servicesPage()
    {
        return view("services");
    }

    public function loginPage()
    {
        return view("auth.login");
    }
}
