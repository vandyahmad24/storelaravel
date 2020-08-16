<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class DetailController extends Controller
{
    public function index(Request $request, $id)
    {
    	$product = Product::with(['galleries','user'])->where('slug',$id)->firstOrFail();
    	return view('pages.detail',compact('product'));
    }
}
