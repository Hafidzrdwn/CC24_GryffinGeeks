<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products = Product::orderBy('created_at', 'DESC')->limit(4)->get();

        return view('pages.landing', compact('categories', 'products'));
    }
}

