@extends('front.layouts.app')

@section('content')

    <!-- Header Area-->
    <div class="header-area" id="headerArea">
      <div class="container h-100 d-flex align-items-center justify-content-between">
        <!-- Back Button-->
        <div class="back-button"><a href="{{ route('account.notifications') }}">
            <svg class="bi bi-arrow-left" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"></path>
            </svg></a></div>
        <!-- Page Title-->
        <div class="page-heading">
          <h6 class="mb-0">Notifications Details</h6>
        </div>
        <!-- Navbar Toggler-->
        <div class="suha-navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#suhaOffcanvas" aria-controls="suhaOffcanvas"><span></span><span></span><span></span></div>
      </div>
    </div>

    @include('front.partials.aside')

    <!-- Page Content Wrapper-->
    <div class="page-content-wrapper">
      <div class="container">
        <!-- Notifications Details Area-->
        <div class="notification-area pt-3 pb-2">
          <!-- Notification Details-->
          <div class="list-group-item d-flex py-3"><span class="noti-icon"><i class="lni lni-alarm"></i></span>
            <div class="noti-info">
              <h6>Suha just uploaded a new product!</h6>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero laboriosam nihil magnam accusantium sint voluptatibus illo earum corporis similique libero praesentium excepturi nostrum eos soluta, cum, quis quo perferendis in?</p><a class="btn-link" href="#">Product Link</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    @include('front.partials.bottomnavbar')

    @endsection
