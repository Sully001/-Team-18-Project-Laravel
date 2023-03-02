<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//have to import this to call any product database query
use App\Models\Product;

class HomeController extends Controller
{
    public function index () {
        //gets a list of all products from the products table and stores them in $products
        $products = Product::all();


        //returns the page to navigate to
        return view('welcome', [
            //passing $products into the welcome page as a products variable
            'products' => $products,
        ]);
    }
}
