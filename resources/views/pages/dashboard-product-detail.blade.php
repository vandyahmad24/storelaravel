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
                <form action="">
                  <div class="card">
                    <div class="card-body">
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label for="">Produck Name</label>
                              <input type="text" class="form-control">
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label for="">Price</label>
                              <input type="number" class="form-control">
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="form-group">
                              <label for="">Description</label>
                              <textarea name="descrioption" id="editor1" cols="30" rows="4" class="form-control">The Nike Air Max 720 SE goes bigger than ever before with Nike's tallest Air unit yet for unimaginable, all-day comfort. There's super breathable fabrics on the upper, while colours add a modern edge. Bring the past into the future with the Nike Air Max 2090, a bold look inspired by the DNA of the iconic Air Max 90. Brand-new Nike Air cushioning
                              </textarea>
                            </div>
                          </div>
                          <div class="col-12">
                            <button class="btn btn-success d-block w-100 mt-5">Update Product</button>
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

                        <div class="col-md-4">
                          <div class="gallery-container">
                            <img src="/images/product-card-1.png" class="w-100" alt="">
                            <a href="" class="delete-gallery">
                              <img src="/images/icon-delete.svg" alt="">
                            </a>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="gallery-container">
                            <img src="/images/product-card-1.png" class="w-100" alt="">
                            <a href="" class="delete-gallery">
                              <img src="/images/icon-delete.svg" alt="">
                            </a>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="gallery-container">
                            <img src="/images/product-card-1.png" class="w-100" alt="">
                            <a href="" class="delete-gallery">
                              <img src="/images/icon-delete.svg" alt="">
                            </a>
                          </div>
                        </div>
                        <div class="col-12">
                          <input type="file" id="file" style="display: none;" multiple>
                          <div class="btn btn-secondary btn-block mt-3" onClick="thisFileUpload()">
                            Add Photo
                          </div>
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
     CKEDITOR.replace('editor1');
</script>
@endpush