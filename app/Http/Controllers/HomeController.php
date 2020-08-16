<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class HomeController extends Controller
{
    public function index()
    {
    	$categories = Category::take(6)->latest()->get();
    	$products = Product::with(['galleries'])->take(8)->latest()->get();
    	// dd($products);
        return view('pages.home',compact('categories','products'));
    }
}