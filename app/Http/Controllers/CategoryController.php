<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function kids()
    {
        $products = Product::where('category', 'kids')->get();
        return view('categories.kids', compact('products'));
    }

    // Method for Men
    public function men()
    {
        $products = Product::where('category', 'men')->get();
        return view('categories.men', compact('products'));
    }

    // Method for Women
    public function women()
    {
        $products = Product::where('category', 'women')->get();
        return view('categories.women', compact('products'));
    }
    
}
