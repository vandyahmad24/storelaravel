@extends('layouts.app')
@section('title')
    Store Category Page
@endsection

@section('content')


  <!-- page content -->
  <div class="page-content page-home">

    <section class="store-trend-categories ">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>All Categories</h5>
          </div>
        </div>
        <div class="row">
          @php $incrementCategori = 0 @endphp
          @foreach($categories as $category)
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="{{$incrementCategori+=100}}">
            <a href="{{route('category-detail', $category->slug)}}" class="component-categories d-block">
              <div class="categories-image">
                <img src="{{Storage::url($category->photo)}}" alt="" class="w-100">
              </div>
              <p class="categories-text">
                {{$category->name}}
              </p>
            </a>
          </div>
          @endforeach

        </div>
      </div>
    </section>
    <section class="store-new-product">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>All Product</h5>
          </div>
        </div>
        <div class="row">
          @php $incrementProduct = 0 @endphp

          @foreach($products as $product)
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="{{$incrementProduct+=100}}">
            <a href="{{route('detail',$product->slug)}}" class="component-products d-block">
              <div class="product-thumbnail">
                  
                <div class="product-image" style="
                                    @if($product->galleries->first())
                                         background-image: url('{{ Storage::url($product->galleries->first()->photos) }}');
                                    @else
                                        background-color: #eee;
                                    @endif
                                    ">
                </div>
              </div>
              <div class="product-text">
                {{$product->name}}
              </div>
              <div class="product-price">
                {{$product->price}}
              </div>
            </a>
          </div>
          @endforeach
        </div>
        <div class="row">
          <div class="col-12">
            <div class="justify-content-center">
            {{$products->links()}}
            </div>
          </div>
        </div>  
      </div>
    </section>
  </div>
  <!-- endpage content -->

@endsection