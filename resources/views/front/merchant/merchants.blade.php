@extends('front.layouts.app')

@section('content')

  <!-- Header Area-->
  <div class="header-area" id="headerArea">
    <div class="container h-100 d-flex align-items-center justify-content-between">
      <!-- Back Button-->
      <div class="back-button"><a href="{{ route('home') }}">
          <svg class="bi bi-arrow-left" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"></path>
          </svg></a></div>
      <!-- Page Title-->
      <div class="page-heading">
        <h6 class="mb-0">Merchants</h6>
      </div>
      <!-- Navbar Toggler-->
      <div class="suha-navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#suhaOffcanvas" aria-controls="suhaOffcanvas"><span></span><span></span><span></span></div>
    </div>
  </div>

    @include('front.partials.aside')

    <div class="page-content-wrapper py-3">
      <div class="container">
        <div class="row gy-3">
          @foreach($merchants as $merchant)
          <div class="col-12">
            <!-- Single Vendor -->
            <div class="single-vendor-wrap bg-img p-4 bg-overlay" @if($merchant->merchant_cover) style="background-image: url('{{ asset($merchant->merchant_cover) }}')" @else style="background-image: url('{{ asset('static/img/bg-img/10.jpg') }}')"  @endif>
              <h5 class="vendor-title text-white">{{ $merchant->name }}</h5>
              <div class="vendor-info">
                <p class="mb-1 text-white">
                  <svg class="bi bi-geo-alt me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"></path>
                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                  </svg>{{ $merchant->city }}, {{ $merchant->country }}
                </p>
                <div class="ratings lh-1"><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><span class="text-white">(99% Positive Seller)</span></div>
              </div><a class="btn btn-warning btn-sm mt-3" href="{{ route('merchants.merchant', $merchant->username) }}">Go To Store
                <svg class="bi bi-arrow-right" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                </svg></a>
              <!-- Vendor Profile-->
              <div class="vendor-profile shadow">
                <figure class="m-0">
                  @if($merchant->merchant_logo)
                    <img src="{{ asset($merchant->merchant_logo) }}" alt="">
                  @else
                    <img src="{{ asset('static/img/ph.jpg') }}" alt="">
                  @endif
                </figure>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>


    @include('front.partials.bottomnavbar')

    @endsection
