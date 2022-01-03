    @extends('front.layouts.app')

    @section('content')

    <!-- Header Area-->
    <div class="header-area" id="headerArea">
      <div class="container h-100 d-flex align-items-center justify-content-between">
        <!-- Back Button-->
        <div class="back-button"><a href="{{ route('account.dashboard') }}">
            <svg class="bi bi-arrow-left" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"></path>
            </svg></a></div>
        <!-- Page Title-->
        <div class="page-heading">
          <h6 class="mb-0">Wishlist</h6>
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
            <h6>Your Wishlist (4)</h6>
            <!-- Layout Options-->
            <div class="layout-options">
              <a class="active" href="#!" title="Remove All">
                <i class="lni lni-eraser"></i>
              </a>
            </div>
          </div>
          <div class="row g-3">
            <!-- Single Weekly Product Card -->
            <div class="col-12 col-md-6">
              <div class="card horizontal-product-card">
                <div class="card-body d-flex align-items-center">
                  <div class="product-thumbnail-side">
                    <!-- Badge --><span class="badge badge-success">Sale</span>
                    <!-- Wishlist Button --><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a>
                    <!-- Thumbnail --><a class="product-thumbnail d-block" href="single-product.html"><img src="{{ asset('static/img/product/10.png') }}" alt=""></a>
                  </div>
                  <div class="product-description">
                    <!-- Product Title --><a class="product-title d-block" href="single-product.html">Modern Sofa</a>
                    <!-- Price -->
                    <p class="sale-price"><i class="lni lni-dollar"></i>$64<span>$89</span></p>
                    <!-- Rating -->
                    <div class="product-rating"><i class="lni lni-star-filled"></i>4.88 (39)</div>
                    <!-- Add to Cart Button --><a class="btn btn-success btn-sm" href="#"><i class="me-1 lni lni-cart"></i>Add to Cart</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Single Weekly Product Card -->
            <div class="col-12 col-md-6">
              <div class="card horizontal-product-card">
                <div class="card-body d-flex align-items-center">
                  <div class="product-thumbnail-side">
                    <!-- Badge --><span class="badge badge-primary">Sale</span>
                    <!-- Wishlist Button --><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a>
                    <!-- Thumbnail --><a class="product-thumbnail d-block" href="single-product.html"><img src="{{ asset('static/img/product/7.png') }}" alt=""></a>
                  </div>
                  <div class="product-description">
                    <!-- Product Title --><a class="product-title d-block" href="single-product.html">Office Chair</a>
                    <!-- Price -->
                    <p class="sale-price"><i class="lni lni-dollar"></i>$100<span>$160</span></p>
                    <!-- Rating -->
                    <div class="product-rating"><i class="lni lni-star-filled"></i>4.82 (125)</div>
                    <!-- Add to Cart Button --><a class="btn btn-success btn-sm" href="#"><i class="me-1 lni lni-cart"></i>Add to Cart</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Single Weekly Product Card -->
            <div class="col-12 col-md-6">
              <div class="card horizontal-product-card">
                <div class="card-body d-flex align-items-center">
                  <div class="product-thumbnail-side">
                    <!-- Badge --><span class="badge badge-danger">-10%</span>
                    <!-- Wishlist Button --><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a>
                    <!-- Thumbnail --><a class="product-thumbnail d-block" href="single-product.html"><img src="{{ asset('static/img/product/12.png') }}" alt="">
                      <!-- Offer Countdown Timer: Please use event time this format: YYYY/MM/DD hh:mm:ss -->
                      <ul class="offer-countdown-timer d-flex align-items-center shadow-sm" data-countdown="2022/12/09 23:59:59">
                        <li><span class="days">0</span>d</li>
                        <li><span class="hours">0</span>h</li>
                        <li><span class="minutes">0</span>m</li>
                        <li><span class="seconds">0</span>s</li>
                      </ul></a>
                  </div>
                  <div class="product-description">
                    <!-- Product Title --><a class="product-title d-block" href="single-product.html">Sun Glasses</a>
                    <!-- Price -->
                    <p class="sale-price"><i class="lni lni-dollar"></i>$24<span>$32</span></p>
                    <!-- Rating -->
                    <div class="product-rating"><i class="lni lni-star-filled"></i>4.79 (63)</div>
                    <!-- Add to Cart Button --><a class="btn btn-success btn-sm" href="#"><i class="me-1 lni lni-cart"></i>Add to Cart</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Single Weekly Product Card -->
            <div class="col-12 col-md-6">
              <div class="card horizontal-product-card">
                <div class="card-body d-flex align-items-center">
                  <div class="product-thumbnail-side">
                    <!-- Badge --><span class="badge badge-warning">New</span>
                    <!-- Wishlist Button --><a class="wishlist-btn" href="#"><i class="lni lni-heart"></i></a>
                    <!-- Thumbnail --><a class="product-thumbnail d-block" href="single-product.html"><img src="{{ asset('static/img/product/13.png') }}" alt=""></a>
                  </div>
                  <div class="product-description">
                    <!-- Product Title --><a class="product-title d-block" href="single-product.html">Wall Clock</a>
                    <!-- Price -->
                    <p class="sale-price"><i class="lni lni-dollar"></i>$31<span>$47</span></p>
                    <!-- Rating -->
                    <div class="product-rating"><i class="lni lni-star-filled"></i>4.99 (7)</div>
                    <!-- Add to Cart Button --><a class="btn btn-success btn-sm" href="#"><i class="me-1 lni lni-cart"></i>Add to Cart</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Select All Products-->
            <div class="col-12">
              <div class="select-all-products-btn"><a class="btn btn-success w-100" href="#">
                  <svg class="bi bi-cart-check me-1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"></path>
                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"></path>
                  </svg>Add All To Cart</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    @include('front.partials.bottomnavbar')

    @endsection
