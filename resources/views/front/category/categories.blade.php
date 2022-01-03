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
          <h6 class="mb-0">Property Categories</h6>
        </div>
        <!-- Navbar Toggler-->
        <div class="suha-navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#suhaOffcanvas" aria-controls="suhaOffcanvas"><span></span><span></span><span></span></div>
      </div>
    </div>

    @include('front.partials.aside')

    <div class="page-content-wrapper">
      <!-- Catagory Single Image-->
      <div class="pt-3">
        <div class="container">
          <div class="catagory-single-img pt-3" style="background-image: url('{{ asset('static/img/interior.jpg') }}')"></div>
        </div>
      </div>
      <!-- Product Catagories-->
      <div class="product-catagories-wrapper py-3">
        <div class="container">
          <div class="section-heading">
            <h6>Categories</h6>
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
      <!-- Top Products-->
      <div class="top-products-area pb-3">
        <div class="container">
          <div class="row g-3">
            <!--Collections-->
            <div class="container">
              <div class="section-heading d-flex align-items-center justify-content-between">
                <h6>Available Collections</h6><a class="btn" href="{{ route('collections') }}">View All</a>
              </div>
              <!-- Collection Slide-->
              <div class="collection-slide owl-carousel">
                @foreach($collections as $collection)
                  <!-- Collection Card-->
                  <div class="card collection-card"><a href="{{ route('collection', $collection->slug) }}">
                    <img src="{{ asset($collection->picture) }}" alt=""></a>
                    <div class="collection-title"><span>{{ $collection->name }}</span><span>{{ count($collection->products) }} new items</span></div>
                  </div>
                @endforeach
              </div>
              <div class="pb-3"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    @include('front.partials.bottomnavbar')

    @endsection
