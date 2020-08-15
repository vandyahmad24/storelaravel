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
          <form action="{{ route('product.update', $item->id) }}" method="post" enctype="multipart/form-data" autocomplete="off">
            @method('PUT')
            @csrf
            <div class="card">
                  <div class="card-body">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nama Product</label>
                                        <input type="text" name="name" value="{{$item->name}}" class="form-control" required>
                                    </div>
                                </div>
                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Pemilik Product</label>
                                        <select class="form-control" name="user_id" required>
                                            @foreach($users as $user)
                                                 <option value="{{$user->id}}" @if($item->user_id == $user->id) active @endif >{{$user->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Kategori Product</label>
                                        <select class="form-control" name="categories_id" required>
                                            @foreach($categories as $category)
                                                 <option value="{{$category->id}}" @if($item->categories_id == $category->id) active @endif>{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Harga Product</label>
                                        <input type="number" name="price" value="{{$item->price}}" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Deskripsi Product</label>
                                        <textarea name="description" class="form-control" id="editor">{{$item->description}}</textarea>
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
                       
                  </div>    
                </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection


@push('addon-script')
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace('editor');
</script>
@endpush