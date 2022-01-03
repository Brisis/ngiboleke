@extends('front.layouts.app')

@section('content')

@include('front.partials.topbar')



  <!-- Modal -->
  <div class="modal fade" id="addedToCart" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Shopping Cart</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Property added to cart.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Continue Shopping</button>
          <button type="button" class="btn btn-primary"><i class="lni lni-cart"></i> Visit Cart</button>
        </div>
      </div>
    </div>
  </div>

  <div class="page-content-wrapper" id="app">
      <div class="container">
        <div class="pt-3">
          <!-- Hero Slides-->
          <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide-->
            <div class="single-hero-slide" style="background-image: url('{{ asset('static/img/bg-img/1.jpeg') }}')">
              <div class="slide-content h-100 d-flex align-items-center">
                <div class="slide-text">
                  <h4 class="text-white mb-0" data-animation="fadeInUp" data-delay="100ms" data-duration="1000ms">Ngiboleke</h4>
                  <p class="text-white" data-animation="fadeInUp" data-delay="400ms" data-duration="1000ms">Lease. Sale. Mortgage</p><a class="btn btn-primary btn-sm" href="#" data-animation="fadeInUp" data-delay="800ms" data-duration="1000ms">Start Now</a>
                </div>
              </div>
            </div>
            <!-- Single Hero Slide-->
            <div class="single-hero-slide" style="background-image: url('{{ asset('static/img/bg-img/2.jpeg') }}')">
              <div class="slide-content h-100 d-flex align-items-center">
                <div class="slide-text">
                  <h4 class="text-success mb-0" data-animation="fadeInUp" data-delay="100ms" data-duration="1000ms">Ngiboleke</h4>
                  <p class="text-success" data-animation="fadeInUp" data-delay="400ms" data-duration="1000ms">Lease. Sale. Mortgage</p><a class="btn btn-success btn-sm" href="#" data-animation="fadeInUp" data-delay="500ms" data-duration="1000ms">Start Now</a>
                </div>
              </div>
            </div>
            <!-- Single Hero Slide-->
            <div class="single-hero-slide" style="background-image: url('{{ asset('static/img/bg-img/3.jpeg') }}')">
              <div class="slide-content h-100 d-flex align-items-center">
                <div class="slide-text">
                  <h4 class="text-white mb-0" data-animation="fadeInUp" data-delay="100ms" data-duration="1000ms">Ngiboleke</h4>
                  <p class="text-white" data-animation="fadeInUp" data-delay="400ms" data-duration="1000ms">Lease. Sale. Mortgage</p><a class="btn btn-danger btn-sm" href="#" data-animation="fadeInUp" data-delay="800ms" data-duration="1000ms">Start Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Product Catagories -->
      <div class="product-catagories-wrapper py-3">
        <div class="container">
          <div class="section-heading">
            <h6>Property Categories</h6>
          </div>
          <div class="product-catagory-wrap">
            <div class="row g-3">
              @foreach($categories as $category)
              <!-- Single Catagory Card -->
              <div class="col-4">
                <div class="card catagory-card">
                  <div class="card-body">
                    <a class="text-success" href="{{ route('category', $category->slug) }}">
                      <i width="28" height="28" fill="currentColor" class="lni lni-{{ $category->icon }} mb-2 text-success"></i>
                      <span>{{ $category->name }}</span>
                    </a>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
      <!-- Flash Sale Slide -->
      <div class="flash-sale-wrapper">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between">
            <h6 class="me-1 d-flex align-items-center">
              <svg class="bi bi-lightning me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09zM4.157 8.5H7a.5.5 0 0 1 .478.647L6.11 13.59l5.732-6.09H9a.5.5 0 0 1-.478-.647L9.89 2.41 4.157 8.5z"></path>
              </svg>Ngiboleke Promotions
            </h6>
            <!-- Please use event time this format: YYYY/MM/DD hh:mm:ss -->
            <!--<ul class="sales-end-timer ps-0 d-flex align-items-center" data-countdown="2022/01/01 14:21:37">
              <li><span class="days">0</span>d</li>
              <li><span class="hours">0</span>h</li>
              <li><span class="minutes">0</span>m</li>
              <li><span class="seconds">0</span>s</li>
            </ul>-->
          </div>
          <!-- Flash Sale Slide-->
          <div class="flash-sale-slide owl-carousel">
            @foreach($promotions as $promotion)
            <!-- Single Flash Sale Card-->
            <div class="card flash-sale-card">
              <div class="card-body">
                <a href="{{ route('product', $promotion->product->slug) }}">
                <img src="{{ asset($promotion->product->image) }}" alt=""><span class="product-title">{{ Str::limit($promotion->product->name, 20) }}</span>
                  <p class="sale-price">
                    $@money($promotion->product->price)
                    @if($promotion->product->discount_percent)
                      <span class="real-price">$@money($promotion->product->price + (($promotion->product->price * $promotion->product->discount_percent) / 100) )</span>
                    @endif
                  </p>
                  <span class="progress-title">33% Sold Out</span>
                  <!-- Progress Bar-->
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </a>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      <!-- Top Products -->
      <div class="top-products-area py-3">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between">
            <h6>Top Properties</h6><a class="btn" href="shop-grid.html">View All</a>
          </div>
          <div class="row g-3">
            @foreach($top_products as $top_product)
            <!-- Single Top Product Card -->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="card product-card">
                <div class="card-body">
                  @if($top_product->rentals)
                    <!-- Badge-->
                    <span class="badge rounded-pill badge-warning">Rental</span>
                  @else
                    <span class="badge rounded-pill badge-success">Sale</span>
                  @endif
                  <!-- Wishlist Button-->
                  <a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a>
                  <!-- Thumbnail -->
                  <a class="product-thumbnail d-block" href="{{ route('product', $top_product->slug) }}">
                    <img class="mb-2" src="{{ asset($top_product->image) }}" alt="">
                    @if($top_product->promotions)
                      <!-- Offer Countdown Timer: Please use event time this format: YYYY/MM/DD hh:mm:ss -->
                      <ul class="offer-countdown-timer d-flex align-items-center shadow-sm" data-countdown="{{ $top_product->promotions->date_end }} 00:00:00">
                        <li><span class="days">00</span>d</li>
                        <li><span class="hours">00</span>h</li>
                        <li><span class="minutes">00</span>m</li>
                        <li><span class="seconds">00</span>s</li>
                      </ul>
                    @endif
                  </a>
                  <!-- Product Title -->
                  <a class="product-title d-block" href="{{ route('product', $top_product->slug) }}">
                    {{ Str::limit($top_product->name, 20) }}
                  </a>
                  <!-- Product Price -->
                  <p class="sale-price">
                    $@money($top_product->price)
                    @if($top_product->discount_percent)
                    <span>$@money($top_product->price + (($top_product->price * $top_product->discount_percent) / 100) )</span>
                    @endif
                  </p>
                  <!-- Rating -->
                  <!-- <div class="product-rating">
                    <i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i>
                    <i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i>
                  </div> -->
                  <!-- Add to Cart -->
                  <a class="btn btn-success btn-sm showAddToCart" href="#" data-bs-toggle="modal" data-bs-target="#addedToCart" onclick="event.preventDefault();" v-on:click="addToCart('{{ $top_product->id }}')"><i class="lni lni-cart"></i></a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      <!-- Cool Facts Area-->
      <div class="cta-area">
        <div class="container">
          <div class="cta-text p-4 p-lg-5" style="background-image: url({{ asset('static/img/bg-img/24.jpg') }})">
            <h4 class="text-white">Property Merchants</h4>
            <p class="text-white">Ngiboleke offers a platform to Businesses &amp; <br>Individual Property Sellers and Mortgagers</p><a class="btn btn-warning" href="{{ route('merchants.merchants') }}">Explore More</a>
          </div>
        </div>
      </div>
      <!-- Weekly Best Sellers-->
      <div class="weekly-best-seller-area py-3">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between">
            <h6>Weekly Best Sellers</h6><a class="btn" href="shop-list.html">View All</a>
          </div>
          <div class="row g-3">
            @foreach($weekly_products as $weekly_product)
            <!-- Single Weekly Product Card -->
            <div class="col-12 col-md-6">
              <div class="card horizontal-product-card">
                <div class="card-body d-flex align-items-center">
                  <div class="product-thumbnail-side">
                    @if($weekly_product->rentals)
                      <!-- Badge-->
                      <span class="badge badge-warning">Rental</span>
                    @else
                      <span class="badge badge-success">Sale</span>
                    @endif
                    <!-- Wishlist Button -->
                    <a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a>
                    <!-- Thumbnail -->
                    <a class="product-thumbnail d-block" href="{{ route('product', $weekly_product->slug) }}">
                      <img src="{{ asset($weekly_product->image) }}" alt="">
                    </a>
                  </div>
                  <div class="product-description">
                    <!-- Product Title -->
                    <a class="product-title d-block" href="{{ route('product', $weekly_product->slug) }}">{{ Str::limit($weekly_product->name, 20) }}</a>
                    <!-- Price -->
                    <p class="sale-price">
                      <i class="lni lni-dollar"></i>
                      $@money($weekly_product->price)
                      @if($weekly_product->discount_percent)
                      <span>$@money($weekly_product->price + (($weekly_product->price * $weekly_product->discount_percent) / 100) )</span>
                      @endif
                    </p>
                    <!-- Rating -->
                    @if($weekly_product->reviews) <div class="product-rating"><i class="lni lni-star-filled"></i>{{ number_format($weekly_product->reviews()->avg('rating'), 2) }} ({{ count($weekly_product->reviews) }})</div>@endif
                    <!-- Buy Now Button -->
                    <a class="btn btn-success btn-sm showAddToCart" href="#" data-bs-toggle="modal" data-bs-target="#addedToCart"  onclick="event.preventDefault();" v-on:click="addToCart('{{ $weekly_product->id }}')"><i class="me-1 lni lni-cart"></i>Add to Cart</a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      <!-- Discount Coupon Card-->
      <div class="container">
        <div class="card discount-coupon-card">
          <div class="card-body">
            <div class="coupon-text-wrap d-flex align-items-center p-3">
              <h4 class="text-white pe-3 mb-0">Get %<br> Discount</h4>
              <p class="text-white ps-3 mb-0">Ngiboleke Discounts coming soon.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Featured Products Wrapper-->
      <div class="featured-products-wrapper py-3">
        <div class="container">
          <div class="section-heading d-flex align-items-center justify-content-between">
            <h6>Featured Property</h6><a class="btn" href="featured-products.html">View All</a>
          </div>
          <div class="row g-3">
            @foreach($featured_products as $featured_product)
            <!-- Featured Product Card-->
            <div class="col-6 col-md-4 col-lg-3">
              <div class="card featured-product-card">
                <div class="card-body">
                  <!-- Badge-->
                  <span class="badge badge-warning custom-badge"><i class="lni lni-star"></i></span>
                  <div class="product-thumbnail-side">
                    <!-- Wishlist Button -->
                    <a class="wishlist-btn shadow-sm border" href="#"><i class="lni lni-heart"></i></a>
                    <!-- Thumbnail -->
                    <a class="product-thumbnail d-block" href="{{ route('product', $featured_product->slug) }}">
                      <img src="{{ asset($featured_product->image) }}" alt="">
                    </a>
                  </div>
                  <div class="product-description">
                    <!-- Product Title -->
                    <a class="product-title d-block" href="{{ route('product', $featured_product->slug) }}">{{ Str::limit($featured_product->name, 20) }}</a>
                    <!-- Price -->
                    <p class="sale-price">
                      $@money($featured_product->price)
                      @if($featured_product->discount_percent)
                      <span>$@money($featured_product->price + (($featured_product->price * $featured_product->discount_percent) / 100) )</span>
                      @endif
                    </p>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      <div class="container">
        <div class="section-heading d-flex align-items-center justify-content-between">
          <h6>Collections</h6><a class="btn" href="#">View All</a>
        </div>
        <!-- Collection Slide-->
        <div class="collection-slide owl-carousel">
          @foreach($collections as $collection)
          <!-- Collection Card-->
          <div class="card collection-card"><a href="{{ route('collection', $collection->slug) }}">
            <img src="{{ asset($collection->picture ) }}" alt=""></a>
            <div class="collection-title"><span>{{ $collection->name }}</span><span>{{ count($collection->products) }} new items</span></div>
          </div>
          @endforeach
        </div>
        <div class="pb-3"></div>
      </div>
    </div>

@include('front.partials.bottomnavbar')

<!-- production version, optimized for size and speed -->
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
  <script>
    var app = new Vue({
      el: '#app',
      data: {
        qty: 0
      },
      methods: {
        addToCart: async function (product) {
          const response = await axios.get(`/add-to-cart/${product}`);
        }
      }
    });
  </script>

@endsection
