<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function products()
    {
        return view('products');
    }
    public function singleproducts()
    {
        return view('single-product');
    }
    public function contact()
    {
        return view('contact');
    }
}
