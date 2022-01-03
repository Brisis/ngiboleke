@extends('front.layouts.app')

@section('content')

    <!-- Header Area-->
    <div class="header-area" id="headerArea">
      <div class="container h-100 d-flex align-items-center justify-content-between">
        <!-- Back Button-->
        <div class="back-button"><a href="{{ route('collections') }}">
            <svg class="bi bi-arrow-left" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"></path>
            </svg></a></div>
        <!-- Page Title-->
        <div class="page-heading">
          <h6 class="mb-0">{{ $collection->name }}</h6>
        </div>
        <!-- Navbar Toggler-->
        <div class="suha-navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#suhaOffcanvas" aria-controls="suhaOffcanvas"><span></span><span></span><span></span></div>
      </div>
    </div>

    @include('front.partials.aside')

    <div class="page-content-wrapper">
      <!-- Top Products-->
      <div class="top-products-area py-3">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between">
            <h6>Collection Properties ({{ count($collection->products) }})</h6>
            <!-- Select Product Catagory-->
            <div class="select-product-catagory">
              <select class="form-select" id="selectProductCatagory" name="selectProductCatagory" aria-label="Default select example">
                <option selected>Short by</option>
                <option value="1">Newest</option>
                <option value="2">Popular</option>
                <option value="3">Ratings</option>
              </select>
            </div>
          </div>
          <div class="product-catagories">
            <div class="row g-3">
              <!-- Single Catagory-->
              <div class="col-4"><a class="shadow-sm" href="#"><img src="img/product/5.png" alt="">Furniture</a></div>
              <!-- Single Catagory-->
              <div class="col-4"><a class="shadow-sm" href="#"><img src="img/product/9.png" alt="">Shoes</a></div>
              <!-- Single Catagory-->
              <div class="col-4"><a class="shadow-sm" href="#"><img src="img/product/4.png" alt="">Dress</a></div>
            </div>
          </div>
          <div class="row g-3">
            @foreach($products as $product)
            <!-- Single Top Product Card -->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="card product-card">
                <div class="card-body">
                  @if($product->rentals)
                    <!-- Badge-->
                    <span class="badge rounded-pill badge-warning">Rental</span>
                  @else
                    <span class="badge rounded-pill badge-success">Sale</span>
                  @endif
                  <!-- Wishlist Button-->
                  <a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a>
                  <!-- Thumbnail -->
                  <a class="product-thumbnail d-block" href="{{ route('product', $product->slug) }}">
                    <img class="mb-2" src="{{ asset($product->image) }}" alt="Picture">
                    @if($product->promotions)
                      <!-- Offer Countdown Timer: Please use event time this format: YYYY/MM/DD hh:mm:ss -->
                      <ul class="offer-countdown-timer d-flex align-items-center shadow-sm" data-countdown="{{ $product->promotions->date_end }} 00:00:00">
                        <li><span class="days">00</span>d</li>
                        <li><span class="hours">00</span>h</li>
                        <li><span class="minutes">00</span>m</li>
                        <li><span class="seconds">00</span>s</li>
                      </ul>
                    @endif
                  </a>
                  <!-- Product Title -->
                  <a class="product-title d-block" href="{{ route('product', $product->slug) }}">{{ Str::limit($product->name, 20) }}</a>
                  <!-- Product Price -->
                  <p class="sale-price">
                    $@money($product->price)
                    @if($product->discount_percent)
                    <span>$@money($product->price + (($product->price * $product->discount_percent) / 100) )</span>
                    @endif
                  </p>
                  <!-- Rating -->
                  <!-- <div class="product-rating">
                    <i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i>
                    <i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i>
                  </div> -->
                  <!-- Add to Cart -->
                  <a class="btn btn-success btn-sm" href="#"><i class="lni lni-cart"></i></a>
                </div>
              </div>
            </div>
            @endforeach
            <!-- End -->
          </div>
        </div>
      </div>
    </div>

    @include('front.partials.bottomnavbar')

    @endsection
