<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Returns the home page view
    public function home()
    {
        return view('pages.home');
    }

    // Returns the variety page view
    public function variety()
    {
        return view('pages.variety');
    }

    // Returns the product page view
    public function product()
    {
        return view('pages.product');
    }

    // Returns the contact page view
    public function contact()
    {
        return view('pages.contact');
    }

    // Returns the checkout page view
    public function checkout()
    {
        return view('pages.checkout');
    }
}