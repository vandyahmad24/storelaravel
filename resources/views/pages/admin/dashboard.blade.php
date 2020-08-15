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
                      Revenue
                    </div>
                    <div class="dashboard-card-subtitle">
                      Rp. {{$revenue}}
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card mb-2">
                  <div class="card-body">
                    <div class="dashboard-card-title">
                      Jumlah Transaction
                    </div>
                    <div class="dashboard-card-subtitle">
                      Rp. {{$transaction}}
                    </div>
                  </div>
                </div>
              </div>
            </div>
           
          </div>

@endsection