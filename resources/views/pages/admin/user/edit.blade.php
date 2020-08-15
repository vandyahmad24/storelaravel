@extends('layouts.admin')
@section('title')
    Admin Dashboard Uses Page
@endsection

@section('content')
 <!-- Section Content -->
<div
  class="section-content section-dashboard-home"
  data-aos="fade-up"
>
  <div class="container-fluid">
    <div class="dashboard-heading">
        <h2 class="dashboard-title">Users</h2>
        <p class="dashboard-subtitle">
            Edit "{{ $item->name }}" Users
        </p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-12">
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          <form action="{{ route('user.update', $item->id) }}" method="post" enctype="multipart/form-data" autocomplete="off">
            @method('PUT')
            @csrf
            <div class="card">
              <div class="card-body">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="form-group">
                              <label>Nama User</label>
                              <input type="text" name="name" class="form-control" value="{{$item->name}}" required>
                          </div>
                      </div>
                       <div class="col-md-12">
                          <div class="form-group">
                              <label>Email User</label>
                              <input type="email" name="email" class="form-control" value="{{$item->email}}" required>
                          </div>
                      </div>
                       <div class="col-md-12">
                          <div class="form-group">
                              <label>Password User</label>
                              <input type="password" name="password" class="form-control">
                              <small>Kosong jika tidak ingin menganti password</small>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="form-group">
                              <label>Roles User</label>
                              <select class="form-control" name="roles" required>
                                  <option value="admin" @if($item->roles=='admin') selected @endif>Admin</option>
                                  <option value="user" @if($item->roles=='user') selected @endif>User</option>
                              </select>
                          </div>
                      </div>
                    </div>
                <div class="row">
                  <div class="col text-right">
                    <button
                      type="submit"
                      class="btn btn-success px-5"
                    >
                      Save Now
                    </button>
                  </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection