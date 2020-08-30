<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Product;
use App\Category;
use App\ProductGallery;
use App\Http\Requests\Admin\ProductRequest;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class DashboardProductController extends Controller
{
    public function index()
    {
        $products = Product::with(['galleries','category'])
                    ->where('user_id',Auth::user()->id)
                    ->get();
    	return view('pages.dashboard-product',[
            'products' => $products
        ]);
    }
    public function detail(Request $request, $id)
    {
        $product = Product::with(['galleries','user','category'])->findOrFail($id);
        $categories = Category::all();

    	return view('pages.dashboard-product-detail',[
            'categories' => $categories,
            'product' => $product
        ]);
    }
    public function uploadGallery(Request $request)
    {
        // dd($request->all());
        $data = $request->all();

         $data['photos'] = $request->file('photos')->store('assets/product','public');

         ProductGallery::create($data);

         return redirect()->route('dashboard-prdouct-detail',$request->products_id);
    }

    public function deleteGallery($id)
    {
        // dd($id);
        $item = ProductGallery::findOrFail($id);
        // dd($item);
        $item->delete();
        return redirect()->route('dashboard-prdouct-detail',$item->products_id);
    }

    public function create()
    {
        $categories = Category::all();
    	return view('pages.dashboard-create-product',[
            'categories' => $categories
        ]);
    }
    public function store(ProductRequest $request)
    {
    // dd($request->all());
         $data = $request->all();

         $data['slug'] = Str::slug($request->name);
         $product = Product::create($data);

         $gallery = [
            'products_id' => $product->id,
            'photos' => $request->file('photo')->store('assets/product','public')
         ];
         ProductGallery::create($gallery);
         return redirect()->route('dashboard-prdouct');
    }

   public function update(ProductRequest $request, $id)
    {   
          // dd($request->all());
         $data = $request->all();
         $item = Product::findOrFail($id);
         $data['slug'] = Str::slug($request->name);
          
         $item->update($data);

         return redirect()->route('dashboard-prdouct');
    }

}
