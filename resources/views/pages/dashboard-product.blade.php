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
            <a href="/produk-add-new.html" class="btn btn-success">
              Add New Product
            </a>
          </div>
        </div>
        <div class="dashboard-content mt-2">
          <div class="container">
            <div class="row mt-4" data-aos="fade-in">
              <div class="col-12 col-sm-6 col-md-4 col-lg-3 card-dashboard-product">
                <a href="/produk-detail.html" class="card d-block">
                  <div class="card-body">
                    <img src="/images/product-card-1.png" alt="" class="w-100 mb-2">
                  </div>
                  <div class="container">
                    <div class="product-title">Sirup Marjan</div>
                    <div class="product-category">Desrkipsi singkat</div>
                  </div>
                </a>
              </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a href="/produk-detail.html" class="card card-dashboard-product d-block">
                  <div class="card-body">
                    <img src="/images/product-card-1.png" alt="" class="w-100 mb-2">
                  </div>
                  <div class="container">
                    <div class="product-title">Sirup Marjan</div>
                    <div class="product-category">Desrkipsi singkat</div>
                  </div>
                </a>
              </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a href="/produk-detail.html" class="card card-dashboard-product d-block">
                  <div class="card-body">
                    <img src="/images/product-card-1.png" alt="" class="w-100 mb-2">
                  </div>
                  <div class="container">
                    <div class="product-title">Sirup Marjan</div>
                    <div class="product-category">Desrkipsi singkat</div>
                  </div>
                </a>
              </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a href="/produk-detail.html" class="card card-dashboard-product d-block">
                  <div class="card-body">
                    <img src="/images/product-card-1.png" alt="" class="w-100 mb-2">
                  </div>
                  <div class="container">
                    <div class="product-title">Sirup Marjan</div>
                    <div class="product-category">Desrkipsi singkat</div>
                  </div>
                </a>
              </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a href="/produk-detail.html" class="card card-dashboard-product d-block">
                  <div class="card-body">
                    <img src="/images/product-card-1.png" alt="" class="w-100 mb-2">
                  </div>
                  <div class="container">
                    <div class="product-title">Sirup Marjan</div>
                    <div class="product-category">Desrkipsi singkat</div>
                  </div>
                </a>
              </div>
            </div>
          </div>

        </div>

@endsection