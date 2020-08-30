@extends('layouts.dashboard')
@section('title')
    Store Dashboard Product Create Page
@endsection

@section('content')
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
                <form action="{{route('dashboard-prdouct-store')}}" method="post" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                  <div class="card">
                    <div class="card-body">
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label for="">Produck Name</label>
                              <input type="text" name="name" class="form-control">
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                              <label for="">Price</label>
                              <input type="number" name="price" class="form-control">
                            </div>
                          </div>
                          <div class="col-lg-12">
                            <div class="form-group">
                              <label for="">Category</label>
                               <select class="form-control" name="categories_id" required>
                                  @foreach($categories as $category)
                                       <option value="{{$category->id}}">{{$category->name}}</option>
                                  @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="form-group">
                              <label for="">Description</label>
                              <textarea name="description" name="descrioption" id="editor1" cols="30" rows="4" class="form-control">The Nike Air Max 720 SE goes bigger than ever before with Nike's tallest Air unit yet for unimaginable, all-day comfort. There's super breathable fabrics on the upper, while colours add a modern edge. Bring the past into the future with the Nike Air Max 2090, a bold look inspired by the DNA of the iconic Air Max 90. Brand-new Nike Air cushioning
                              </textarea>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="form-group">
                              <label for="">Thumbnails</label>
                              <input type="file" name="photo" class="form-control pt-1">
                              <p class="text-muted">Maksimal berukuran 2MB</p>
                            </div>
                          </div>
                          <div class="col-12">
                            <button class="btn btn-success d-block w-100 mt-5" type="submit">Save Now</button>
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
@push('addon-script')
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
     CKEDITOR.replace('editor1');
</script>
@endpush