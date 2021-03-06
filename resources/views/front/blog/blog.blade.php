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
          <h6 class="mb-0">Blog List</h6>
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
          <div class="section-heading">
            <h6>Read by category</h6>
          </div>
          <div class="row g-3">
            <!-- Single Blog Catagory-->
            <div class="col-6 col-sm-4">
              <div class="card blog-catagory-card">
                <div class="card-body"><a href="#"><i class="lni lni-quotation"></i><span class="d-block">Review</span></a></div>
              </div>
            </div>
            <!-- Single Blog Catagory-->
            <div class="col-6 col-sm-4">
              <div class="card blog-catagory-card">
                <div class="card-body"><a href="#"><i class="lni lni-shopping-basket"></i><span class="d-block">Shopping</span></a></div>
              </div>
            </div>
            <!-- Single Blog Catagory-->
            <div class="col-6 col-sm-4">
              <div class="card blog-catagory-card">
                <div class="card-body"><a href="#"><i class="lni lni-bulb"></i><span class="d-block">Tips</span></a></div>
              </div>
            </div>
            <!-- Single Blog Catagory-->
            <div class="col-6 col-sm-4">
              <div class="card blog-catagory-card">
                <div class="card-body"><a href="#"><i class="lni lni-offer"></i><span class="d-block">Offer</span></a></div>
              </div>
            </div>
            <!-- Single Blog Catagory-->
            <div class="col-6 col-sm-4">
              <div class="card blog-catagory-card">
                <div class="card-body"><a href="#"><i class="lni lni-bolt-alt"></i><span class="d-block">Trends</span></a></div>
              </div>
            </div>
            <!-- Single Blog Catagory-->
            <div class="col-6 col-sm-4">
              <div class="card blog-catagory-card">
                <div class="card-body"><a href="#"><i class="lni lni-paperclip"></i><span class="d-block">News</span></a></div>
              </div>
            </div>
          </div>
        </div>

        <div class="container mt-3">
          <div class="section-heading d-flex align-items-center justify-content-between">
            <h6 class="pt-3">Blog List</h6>
          </div>
          <div class="row g-3">

            <!-- Single Blog Card-->
            <div class="col-12 col-md-6">
              <div class="card blog-card list-card">
                <!-- Post Image-->
                <div class="post-img"><img src="{{ asset('static/img/bg-img/16.jpg') }}" alt=""></div>
                <!-- Post Bookmark--><a class="post-bookmark" href="#"><i class="lni lni-bulb"></i></a>
                <!-- Read More Button--><a class="btn btn-danger btn-sm read-more-btn" href="{{ route('blog') }}">Read More</a>
                <!-- Post Content-->
                <div class="post-content">
                  <div class="bg-shapes">
                    <div class="circle1"></div>
                    <div class="circle2"></div>
                    <div class="circle3"></div>
                    <div class="circle4"></div>
                  </div>
                  <!-- Post Catagory--><a class="post-catagory d-block" href="#">Trends</a>
                  <!-- Post Title--><a class="post-title d-block" href="{{ route('blog') }}">Bridal shopping is the latest trends of this month</a>
                  <!-- Post Meta-->
                  <div class="post-meta d-flex align-items-center justify-content-between flex-wrap"><a href="#"><i class="lni lni-user"></i>Ngiboleke</a><span><i class="lni lni-timer"></i>6 min</span></div>
                </div>
              </div>
            </div>
            <!-- Single Blog Card-->
            <div class="col-12 col-md-6">
              <div class="card blog-card list-card">
                <!-- Post Image-->
                <div class="post-img"><img src="{{ asset('static/img/bg-img/17.jpg') }}" alt=""></div>
                <!-- Post Bookmark--><a class="post-bookmark" href="#"><i class="lni lni-bulb"></i></a>
                <!-- Read More Button--><a class="btn btn-warning btn-sm read-more-btn" href="{{ route('blog') }}">Read for $0.33</a>
                <!-- Post Content-->
                <div class="post-content">
                  <div class="bg-shapes">
                    <div class="circle1"></div>
                    <div class="circle2"></div>
                    <div class="circle3"></div>
                    <div class="circle4"></div>
                  </div>
                  <!-- Post Catagory--><a class="post-catagory d-block" href="#">News</a>
                  <!-- Post Title--><a class="post-title d-block" href="{{ route('blog') }}">How to easily buy a product</a>
                  <!-- Post Meta-->
                  <div class="post-meta d-flex align-items-center justify-content-between flex-wrap"><a href="#"><i class="lni lni-user"></i>Ngiboleke</a><span><i class="lni lni-timer"></i>3 min</span></div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    @include('front.partials.bottomnavbar')

    @endsection
