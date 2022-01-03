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
      <h6 class="mb-0">My Notifications</h6>
    </div>
    <!-- Navbar Toggler-->
    <div class="suha-navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#suhaOffcanvas" aria-controls="suhaOffcanvas"><span></span><span></span><span></span></div>
  </div>
</div>

@include('front.partials.aside')

<!-- Page Content Wrapper-->
<div class="page-content-wrapper">
  <div class="container">
    <!-- Section Heading-->
    <div class="section-heading d-flex align-items-center pt-3 justify-content-between">
      <h6>Notification(s)</h6><a class="notification-clear-all text-secondary" href="#">Clear All</a>
    </div>
    <!-- Notifications Area-->
    <div class="notification-area pb-2">
      <div class="list-group">
        <!-- Single Notification--><a class="list-group-item d-flex align-items-center" href="{{ route('account.notification') }}"><span class="noti-icon"><i class="lni lni-alarm"></i></span>
          <div class="noti-info">
            <h6 class="mb-0">Suha just uploaded a new product!</h6><span>12 min ago</span>
          </div></a>
        <!-- Single Notification--><a class="list-group-item d-flex align-items-center" href="{{ route('account.notification') }}"><span class="noti-icon"><i class="lni lni-dropbox"></i></span>
          <div class="noti-info">
            <h6 class="mb-0">Black Friday Deals in One Place</h6><span>49 min ago</span>
          </div></a>
        <!-- Single Notification--><a class="list-group-item d-flex align-items-center" href="{{ route('account.notification') }}"><span class="noti-icon"><i class="lni lni-reply"></i></span>
          <div class="noti-info">
            <h6 class="mb-0">Share your experience, it's matters!</h6><span>58 min ago</span>
          </div></a>
        <!-- Single Notification--><a class="list-group-item readed d-flex align-items-center" href="{{ route('account.notification') }}"><span class="noti-icon"><i class="lni lni-ship"></i></span>
          <div class="noti-info">
            <h6 class="mb-0">Your order has been delivered.</h6><span>Yesterday</span>
          </div></a>
        <!-- Single Notification--><a class="list-group-item readed d-flex align-items-center" href="{{ route('account.notification') }}"><span class="noti-icon"><i class="lni lni-heart-filled"></i></span>
          <div class="noti-info">
            <h6 class="mb-0">Your wishlist is updated.</h6><span>2 days ago</span>
          </div></a>
        <!-- Single Notification--><a class="list-group-item readed d-flex align-items-center" href="{{ route('account.notification') }}"><span class="noti-icon"><i class="lni lni-thunder"></i></span>
          <div class="noti-info">
            <h6 class="mb-0">11% Price drop! Hurry up.</h6><span>2 days ago</span>
          </div></a>
        <!-- Single Notification--><a class="list-group-item readed d-flex align-items-center" href="{{ route('account.notification') }}"><span class="noti-icon"><i class="lni lni-offer"></i></span>
          <div class="noti-info">
            <h6 class="mb-0">Use 30% Discount Code</h6><span>3 days ago</span>
          </div></a>
        <!-- Single Notification--><a class="list-group-item readed d-flex align-items-center" href="{{ route('account.notification') }}"><span class="noti-icon"><i class="lni lni-ship"></i></span>
          <div class="noti-info">
            <h6 class="mb-0">Your order has been delivered.</h6><span>Yesterday</span>
          </div></a>
        <!-- Single Notification--><a class="list-group-item readed d-flex align-items-center" href="{{ route('account.notification') }}"><span class="noti-icon"><i class="lni lni-heart-filled"></i></span>
          <div class="noti-info">
            <h6 class="mb-0">Your wishlist is updated.</h6><span>2 days ago</span>
          </div></a>
        <!-- Single Notification--><a class="list-group-item readed d-flex align-items-center" href="{{ route('account.notification') }}"><span class="noti-icon"><i class="lni lni-thunder"></i></span>
          <div class="noti-info">
            <h6 class="mb-0">11% Price drop! Hurry up.</h6><span>2 days ago</span>
          </div></a>
        <!-- Single Notification--><a class="list-group-item readed d-flex align-items-center" href="{{ route('account.notification') }}"><span class="noti-icon"><i class="lni lni-offer"></i></span>
          <div class="noti-info">
            <h6 class="mb-0">Use 30% Discount Code</h6><span>3 days ago</span>
          </div></a>
      </div>
    </div>
  </div>
</div>

@include('front.partials.bottomnavbar')

@endsection
