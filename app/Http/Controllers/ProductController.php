<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function kids()
    {
        // Retrieve products for the "kids" category
        $products = Product::where('category', 'kids')->get();

        // Return the view with the $products data
        return view('categories.kids', compact('products'));
    }
    
}
