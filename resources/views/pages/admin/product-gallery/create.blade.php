@extends('layouts.admin')
@section('title')
    Admin Dashboard Product Gallery Page
@endsection

@section('content')
   <!-- content section -->
        <div class="section-content section-dashboard-home" data-aos="fade-up">
          <div class="container-fluid">
            <h2 class="dashboard-title">Admin Gallery Product Dashboard</h2>
            <p class="dashboard-subtitle">Tambah Gallery Product Baru</p>
          </div>
        </div>
        <div class="dashboard-content">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card">
                  <div class="card-body">
                        <form action="{{route('product-gallery.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Product</label>
                                        <select class="form-control" name="products_id" required>
                                            @foreach($products as $product)
                                                 <option value="{{$product->id}}">{{$product->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Foto Product</label>
                                        <input type="file" name="photos" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-right">
                                        <button type="submit" class="btn btn-success px-5">
                                            Save Now
                                        </button>
                                </div>
                            </div>
                        </form>
                  </div>    
                </div>
              </div>
            </div>
           
          </div>

@endsection
