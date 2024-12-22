<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function men()
    {
        return view('categories.men');
    }

    public function women()
    {
        return view('categories.women');
    }

    public function kids()
    {
        return view('categories.kids');
    }

    public function accessories()
    {
        return view('categories.accessories');
    }
}
