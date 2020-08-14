@extends('layouts.dashboard')
@section('title')
    Store Dashboard Setting Store Page
@endsection

@section('content')

 <!-- content section -->
        <div class="section-content section-dashboard-home" data-aos="fade-up">
          <div class="container-fluid">
            <h2 class="dashboard-title">Store Setting</h2>
            <p class="dashboard-subtitle">Make Store bla bla!</p>
          </div>
        </div>
        <div class="dashboard-content">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <form action="">
                  <div class="card">
                    <div class="card-body">
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label for="">Store Name</label>
                              <input type="text" class="form-control">
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label for="">Categori Name</label>
                              <select name="category" class="form-control">
                                <option value="">Pilih Kategori</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label for="">Store Status</label>
                              <p class="text-muted">Apakah Toko anda buka?</p>
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" name="is_store_input" class="custom-control-input"
                                  id="openStoreTrue">
                                <label for="openStoreTrue" class="custom-control-label">Iya, Buka toko</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" name="is_store_input" class="custom-control-input"
                                  id="openStorefalse">
                                <label for="openStorefalse" class="custom-control-label">Tidak, Buka toko</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col text-right">
                            <button type="submit" class="btn btn-success px-5">Save Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
 

@endsection