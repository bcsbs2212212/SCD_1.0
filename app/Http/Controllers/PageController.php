<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {

        $products = Product::where('category', 'kids')->get();
        return view('index', compact('products'));
    }

    public function about()
    {
        return view('about');
    }

    public function products()
    {
        $products = Product::where('category', 'kids')->get();
        return view('products', compact('products'));
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
