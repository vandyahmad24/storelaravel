@extends('layouts.dashboard')
@section('title')
    Store Dashboard Product Detail Page
@endsection

@section('content')
   <!-- content section -->
        <div class="section-content section-dashboard-home" data-aos="fade-up">
          <div class="container-fluid">
            <h2 class="dashboard-title">Add New Setting</h2>
            <p class="dashboard-subtitle">Create your own product</p>
          </div>
        </div>
        <div class="dashboard-content">
          <div class="container">
            <div class="row">
              <div class="col-12">
                 @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{route('dashboard-product-update',$product->id)}}" method="post" enctype="multipart/form-data" >
                  @csrf
                  <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                  <div class="card">
                    <div class="card-body">
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label for="">Produck Name</label>
                              <input type="text" name="name" value="{{$product->name}}" class="form-control">
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label for="">Price</label>
                              <input type="number" name="price" value="{{$product->price}}" class="form-control">
                            </div>
                          </div>
                           <div class="col-lg-12">
                            <div class="form-group">
                              <label for="">Category</label>
                               <select class="form-control" name="categories_id" required>

                                  @foreach($categories as $category)
                                       <option value="{{$category->id}}" @if($category->id == $product->categories_id) selected @endif>{{$category->name}}</option>
                                  @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="form-group">
                              <label for="">Description</label>
                              <textarea name="description" id="editor1" cols="30" rows="4" class="form-control">{!! $product->description !!}
                              </textarea>
                            </div>
                          </div>
                          <div class="col-12">
                            <button type="submit" class="btn btn-success d-block w-100 mt-5">Update Product</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="container">
                      <div class="row">
                        @foreach($product->galleries as $gallery)
                        <div class="col-md-4">
                          <div class="gallery-container">
                            <img src="{{Storage::url($gallery->photos ?? '')}}" class="w-100" alt="">
                            <a href="{{route('dashboard-delete-product-gallery',$gallery->id)}}" class="delete-gallery">
                              <img src="/images/icon-delete.svg" alt="">
                            </a>
                          </div>
                        </div>
                        @endforeach
                        <div class="col-12">
                            <form action="{{ route('dashboard-product-gallery-upload') }}" method="POST" enctype="multipart/form-data">
                              @csrf
                              <input type="hidden" value="{{ $product->id }}" name="products_id">
                              <input
                                type="file"
                                name="photos"
                                id="file"
                                style="display: none;"
                                multiple
                                onchange="form.submit()"
                              />
                              <button
                                type="button"
                                class="btn btn-secondary btn-block mt-3"
                                onclick="thisFileUpload()"
                              >
                                Add Photo
                              </button>
                            </form>
                          </div>


                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection
@push('addon-script')
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    function thisFileUpload() {
      document.getElementById("file").click();
    }
    function sendform() {
      // console.log(getElementById("myform"));
      var x =  document.getElementById("myform");
      console.log(x);

    }


     CKEDITOR.replace('editor1');
</script>
@endpush