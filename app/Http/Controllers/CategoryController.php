<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class CategoryController extends Controller
{
    public function index()
    {
    	$categories = Category::all();
    	$products = Product::with(['galleries'])->latest()->paginate(16);
        return view('pages.category',compact('categories','products'));
    }
    public function detail(Request $request, $slug)
    {
    	$categories = Category::all();
    	$category = Category::where('slug', $slug)->firstOrFail();
    	$products = Product::with(['galleries'])->where('categories_id',$category->id)->latest()->paginate(16);
        return view('pages.category',compact('categories','products'));
    }
}