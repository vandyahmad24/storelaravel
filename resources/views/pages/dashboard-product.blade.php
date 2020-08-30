@extends('layouts.dashboard')
@section('title')
    Store Dashboard Product Page
@endsection

@section('content')
  <!-- content section -->
        <div class="section-content section-dashboard-home" data-aos="fade-up">
          <div class="container-fluid">
            <h2 class="dashboard-title">Dashboard Produk</h2>
            <p class="dashboard-subtitle">Manage it all and get money!</p>
            <a href="{{route('dashboard-prdouct-create')}}" class="btn btn-success">
              Add New Product
            </a>
          </div>
        </div>
        <div class="dashboard-content mt-2">
          <div class="container">
            <div class="row mt-4" data-aos="fade-in">
              @foreach($products as $product)
              <div class="col-12 col-sm-6 col-md-4 col-lg-3 card-dashboard-product">
                <a href="{{route('dashboard-prdouct-detail', $product->id)}}" class="card d-block">
                  <div class="card-body">
                    <img src="{{Storage::url($product->galleries->first()->photos ?? '')}}" alt="" class="w-100 mb-2">
                  </div>
                  <div class="container">
                    <div class="product-title">{{$product->name}}</div>
                    <div class="product-category">{{$product->category->name}}</div>
                  </div>
                </a>
              </div>
              @endforeach
              
            </div>
          </div>

        </div>

@endsection