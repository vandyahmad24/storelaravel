@extends('layouts.app')
@section('title')
    Store Homepage
@endsection

@section('content')
<div class="page-content page-home">
    <section class="store-carousel">
      <div class="container">
        <div class="row">
          <div class="col-lg-12" data-aos="zoom-in">
            <div id="storeCarousel" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li class="active" data-target="#storeCarousel" data-slide-to="0"></li>
                <li data-target="#storeCarousel" data-slide-to="1"></li>
                <li data-target="#storeCarousel" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="/images/banner.jpg" class="d-block w-100" alt="banner">
                </div>
                <div class="carousel-item ">
                  <img src="/images/banner.jpg" class="d-block w-100" alt="banner">
                </div>
                <div class="carousel-item ">
                  <img src="/images/banner.jpg" class="d-block w-100" alt="banner">
                </div>
              </div>

              <!-- navigasi carousek -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="store-trend-categories ">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>Trend Categories</h5>
          </div>
        </div>
        <div class="row">
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="100">
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="/images/categories-gadgets.svg" alt="" class="w-100">
              </div>
              <p class="categories-text">
                Gadget
              </p>
            </a>
          </div>
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="200">
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="/images/categories-baby.svg" alt="" class="w-100">
              </div>
              <p class="categories-text">
                Gadget
              </p>
            </a>
          </div>
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="300">
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="/images/categories-furniture.svg" alt="" class="w-100">
              </div>
              <p class="categories-text">
                Gadget
              </p>
            </a>
          </div>
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="400">
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="/images/categories-makeup.svg" alt="" class="w-100">
              </div>
              <p class="categories-text">
                Gadget
              </p>
            </a>
          </div>
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="500">
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="/images/categories-sneaker.svg" alt="" class="w-100">
              </div>
              <p class="categories-text">
                Gadget
              </p>
            </a>
          </div>
          <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="600">
            <a href="#" class="component-categories d-block">
              <div class="categories-image">
                <img src="/images/categories-tools.svg" alt="" class="w-100">
              </div>
              <p class="categories-text">
                Gadget
              </p>
            </a>
          </div>
        </div>
      </div>
    </section>
    <section class="store-new-product">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>New Product</h5>
          </div>
        </div>
        <div class="row">
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <a href="/details.html" class="component-products d-block">
              <div class="product-thumbnail">
                <div class="product-image" style="background-image: url('/images/products-apple-watch.jpg');">
                </div>
              </div>
              <div class="product-text">
                apple wathc 4
              </div>
              <div class="product-price">
                Rp 1300
              </div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
            <a href="/details.html" class="component-products d-block">
              <div class="product-thumbnail">
                <div class="product-image" style="background-image: url('/images/products-apple-watch.jpg');">
                </div>
              </div>
              <div class="product-text">
                apple wathc 4
              </div>
              <div class="product-price">
                Rp 1300
              </div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <a href="/details.html" class="component-products d-block">
              <div class="product-thumbnail">
                <div class="product-image" style="background-image: url('/images/products-apple-watch.jpg');">
                </div>
              </div>
              <div class="product-text">
                apple wathc 4
              </div>
              <div class="product-price">
                Rp 1300
              </div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="400">
            <a href="/details.html" class="component-products d-block">
              <div class="product-thumbnail">
                <div class="product-image" style="background-image: url('/images/products-apple-watch.jpg');">
                </div>
              </div>
              <div class="product-text">
                apple wathc 4
              </div>
              <div class="product-price">
                Rp 1300
              </div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="500">
            <a href="/details.html" class="component-products d-block">
              <div class="product-thumbnail">
                <div class="product-image" style="background-image: url('/images/products-apple-watch.jpg');">
                </div>
              </div>
              <div class="product-text">
                apple wathc 4
              </div>
              <div class="product-price">
                Rp 1300
              </div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="600">
            <a href="/details.html" class="component-products d-block">
              <div class="product-thumbnail">
                <div class="product-image" style="background-image: url('/images/products-apple-watch.jpg');">
                </div>
              </div>
              <div class="product-text">
                apple wathc 4
              </div>
              <div class="product-price">
                Rp 1300
              </div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="700">
            <a href="/details.html" class="component-products d-block">
              <div class="product-thumbnail">
                <div class="product-image" style="background-image: url('/images/products-apple-watch.jpg');">
                </div>
              </div>
              <div class="product-text">
                apple wathc 4
              </div>
              <div class="product-price">
                Rp 1300
              </div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800">
            <a href="/details.html" class="component-products d-block">
              <div class="product-thumbnail">
                <div class="product-image" style="background-image: url('/images/products-apple-watch.jpg');">
                </div>
              </div>
              <div class="product-text">
                apple wathc 4
              </div>
              <div class="product-price">
                Rp 1300
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection