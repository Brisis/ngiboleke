@extends('front.layouts.app')

@section('content')

    <!-- Header Area-->
    <div class="header-area" id="headerArea">
      <div class="container h-100 d-flex align-items-center justify-content-between">
        <!-- Back Button-->
        <div class="back-button"><a href="{{ route('merchants.merchants') }}">
            <svg class="bi bi-arrow-left" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"></path>
            </svg></a></div>
        <!-- Page Title-->
        <div class="page-heading">
          <h6 class="mb-0">Merchant Shop</h6>
        </div>
        <!-- Navbar Toggler-->
        <div class="suha-navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#suhaOffcanvas" aria-controls="suhaOffcanvas"><span></span><span></span><span></span></div>
      </div>
    </div>

    @include('front.partials.aside')

    <div class="page-content-wrapper pb-3">
      <!-- Vendor Details Wrap -->
      <div class="vendor-details-wrap bg-img bg-overlay py-4" @if($merchant->merchant_cover) style="background-image: url('{{ asset($merchant->merchant_cover) }}')" @else style="background-image: url('{{ asset('static/img/bg-img/12.jpg') }}')"  @endif>
        <div class="container">
          <div class="d-flex align-items-start">
            <!-- Vendor Profile-->
            <div class="vendor-profile shadow me-3 mt-1">
              <figure class="m-0">
                @if($merchant->merchant_logo)
                  <img src="{{ asset($merchant->merchant_logo) }}" alt="">
                @else
                  <img src="{{ asset('static/img/ph.jpg') }}" alt="">
                @endif
              </figure>
            </div>
            <!-- Vendor Info-->
            <div class="vendor-info">
              <h5 class="vendor-title text-white">{{ $merchant->name }}</h5>
              <p class="mb-1 text-white">
                <svg class="bi bi-geo-alt me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"></path>
                  <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                </svg>{{ $merchant->city }}, {{ $merchant->country }}
              </p>
              <div class="ratings lh-1"><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><span class="text-white">(99% Positive Seller)</span></div>
            </div>
          </div>
          <!-- Vendor Basic Info-->
          <div class="vendor-basic-info d-flex align-items-center justify-content-between mt-4">
            <div class="single-basic-info">
              <div class="icon">
                <svg class="bi bi-shield-check" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"></path>
                  <path d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
                </svg>
              </div><span>Trusted Seller</span>
            </div>
            <div class="single-basic-info">
              <div class="icon">
                <svg class="bi bi-cart2" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"></path>
                </svg>
              </div><span>{{ count($merchant->products) }}+ Items</span>
            </div>
            <div class="single-basic-info">
              <div class="icon">
                <svg class="bi bi-truck" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"></path>
                </svg>
              </div><span>98% Ship On Time</span>
            </div>
          </div>
        </div>
      </div>
      <!-- Vendor Tabs -->
      <div class="vendor-tabs">
        <div class="container">
          <ul class="nav nav-tabs mb-3" id="vendorTab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="home-tab" href="{{ route('merchants.about_merchant', $merchant->username) }}">About</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="products-tab" href="{{ route('merchants.merchant', $merchant->username) }}">Products</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link active" id="reviews-tab" href="{{ route('merchants.reviews_merchant', $merchant->username) }}">Ratings &amp; Reviews</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="tab-content" id="vendorTabContent">
        <div class="tab-pane fade show active" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
          <!-- Rating & Review Wrapper -->
          <div class="rating-and-review-wrapper bg-white py-3 mb-3">
            <div class="container">
              <div class="rating-review-content">
                <ul class="ps-0">
                  <!-- Single User Review -->
                  <li class="single-user-review d-flex">
                    <div class="user-thumbnail"><img src="{{ asset('static/img/bg-img/7.jpg') }}" alt=""></div>
                    <div class="rating-comment">
                      <div class="rating"><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i></div>
                      <p class="comment mb-0">Very good product. It's just amazing!</p><span class="name-date">Designing World 12 Dec 2021</span><a class="review-image mt-2 border rounded" href="img/product/3.png"><img class="rounded-3" src="img/product/3.png" alt=""></a>
                    </div>
                  </li>

                </ul>
              </div>
            </div>
          </div>
          <!-- Ratings Submit Form-->
          <div class="ratings-submit-form bg-white py-3">
            <div class="container">
              <h6>Submit A Review</h6>
              <form action="#" method="">
                <div class="stars mb-3">
                  <input class="star-1" type="radio" name="star" id="star1">
                  <label class="star-1" for="star1"></label>
                  <input class="star-2" type="radio" name="star" id="star2">
                  <label class="star-2" for="star2"></label>
                  <input class="star-3" type="radio" name="star" id="star3">
                  <label class="star-3" for="star3"></label>
                  <input class="star-4" type="radio" name="star" id="star4">
                  <label class="star-4" for="star4"></label>
                  <input class="star-5" type="radio" name="star" id="star5">
                  <label class="star-5" for="star5"></label><span></span>
                </div>
                <textarea class="form-control mb-3" id="comments" name="comment" cols="30" rows="10" data-max-length="200" placeholder="Write your review..."></textarea>
                <button class="btn btn-sm btn-primary" type="submit">Save Review</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    @include('front.partials.bottomnavbar')

    @endsection
