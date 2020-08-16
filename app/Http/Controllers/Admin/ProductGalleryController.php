<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\ProductGallery;
use App\Product;

use App\Http\Requests\Admin\ProductGalleryRequest;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;


class ProductGalleryController extends Controller
{
    public function index()
    {
        if(request()->ajax())
        {
            $query = ProductGallery::with(['product']);

            return DataTables::of($query)
                  ->addColumn('action', function ($item){
                    return '
                        <div class="btn-group">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle mr-1 mb-1" 
                                        type="button"
                                        data-toggle="dropdown">Aksi
                                </button>
                                <div class="dropdown-menu">
                                    <form action="'.route('product-gallery.destroy', $item->id).'" method="post">
                                        '.method_field('delete').csrf_field().'
                                        <button type="submit" class="dropdown-item text-danger">
                                        Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    ';  
                  })
                  ->editColumn('photos', function($item){
                  		return $item->photos ? '<img src="'.Storage::url($item->photos).'" style="max-height:80px;"/>' : '';
                  })
                  ->addIndexColumn()
                  ->rawColumns(['action','photos'])
                  ->make();
            
        }


        return view('pages.admin.product-gallery.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$products = Product::all();
        return view('pages.admin.product-gallery.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductGalleryRequest $request)
    {

         $data = $request->all();

         $data['photos'] = $request->file('photos')->store('assets/product','public');

         ProductGallery::create($data);

         return redirect()->route('product-gallery.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = ProductGallery::findOrFail($id);
        $item->delete();
        return redirect()->route('product-gallery.index');

    }
}
