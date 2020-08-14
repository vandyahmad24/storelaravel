@extends('layouts.dashboard')
@section('title')
    Store Dashboard Setting Account Page
@endsection

@section('content')

 <!-- content section -->
      <div class="section-content section-dashboard-home" data-aos="fade-up">
          <div class="container-fluid">
            <h2 class="dashboard-title">Account Name</h2>
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
                        <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="name">Your name </label>
                              <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name"
                                value="Setra Duta Cemara" />
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="email">Your Email </label>
                              <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                name="email" value="Blok B2 No. 34" />
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="addressOne">Address 1</label>
                              <input type="text" class="form-control" id="addressOne" aria-describedby="emailHelp"
                                name="addressOne" value="Setra Duta Cemara" />
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="addressTwo">Address 2</label>
                              <input type="text" class="form-control" id="addressTwo" aria-describedby="emailHelp"
                                name="addressTwo" value="Blok B2 No. 34" />
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="province">Province</label>
                              <select name="province" id="province" class="form-control">
                                <option value="West Java">West Java</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="city">City</label>
                              <select name="city" id="city" class="form-control">
                                <option value="Bandung">Bandung</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="postalCode">Postal Code</label>
                              <input type="text" class="form-control" id="postalCode" name="postalCode" value="40512" />
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="country">Country</label>
                              <input type="text" class="form-control" id="country" name="country" value="Indonesia" />
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="mobile">Mobile</label>
                              <input type="text" class="form-control" id="mobile" name="mobile"
                                value="+628 2020 11111" />
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