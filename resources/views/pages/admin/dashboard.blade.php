@extends('layouts.admin')
@section('title')
    Admin Dashboard Page
@endsection

@section('content')
   <!-- content section -->
        <div class="section-content section-dashboard-home" data-aos="fade-up">
          <div class="container-fluid">
            <h2 class="dashboard-title">Admin Dashboard</h2>
            <p class="dashboard-subtitle">Admin Pannel!</p>
          </div>
        </div>
        <div class="dashboard-content">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <div class="card mb-2">
                  <div class="card-body">
                    <div class="dashboard-card-title">
                      Jumlah Customer
                    </div>
                    <div class="dashboard-card-subtitle">
                      {{$customer}}
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-2">
                  <div class="card-body">
                    <div class="dashboard-card-title">
                      Dsagviard
                    </div>
                    <div class="dashboard-card-subtitle">
                      15,299
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-2">
                  <div class="card-body">
                    <div class="dashboard-card-title">
                      Dsagviard
                    </div>
                    <div class="dashboard-card-subtitle">
                      15,299
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-12 mt-2">
                <h5 class="mb-3">Recent transakstion</h5>
                <a href="/dashboard-transaction-detail.html" class="card card-list d-block">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-1">
                        <img src="/images/dashboard-icon-product-1.png" alt="">
                      </div>
                      <div class="col-md-4">
                        Sirup marjan
                      </div>
                      <div class="col-md-3">
                        Vandy Ahmad
                      </div>
                      <div class="col-md-3">
                        12 Januari, 2020
                      </div>
                      <div class="col-md-1 d-none d-md-block">
                        <img src="/images/dashboard-arrow-right.svg" alt="">
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-1">
                        <img src="/images/dashboard-icon-product-1.png" alt="">
                      </div>
                      <div class="col-md-4">
                        Sirup marjan
                      </div>
                      <div class="col-md-3">
                        Vandy Ahmad
                      </div>
                      <div class="col-md-3">
                        12 Januari, 2020
                      </div>
                      <div class="col-md-1 d-none d-md-block">
                        <img src="/images/dashboard-arrow-right.svg" alt="">
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-1">
                        <img src="/images/dashboard-icon-product-3.png" alt="">
                      </div>
                      <div class="col-md-4">
                        Sirup marjan
                      </div>
                      <div class="col-md-3">
                        Vandy Ahmad
                      </div>
                      <div class="col-md-3">
                        12 Januari, 2020
                      </div>
                      <div class="col-md-1 d-none d-md-block">
                        <img src="/images/dashboard-arrow-right.svg" alt="">
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>

@endsection