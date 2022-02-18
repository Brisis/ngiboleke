@extends('front.layouts.app')

@section('content')

<!-- Page Content Wrapper-->
<div class="page-content-wrapper">
  <div class="container">
    <!-- Offline Area-->
    <div class="offline-area-wrapper py-3 d-flex align-items-center justify-content-center">
      <div class="offline-text text-center">
        <img class="mb-4 px-4" src="{{ asset('static/img/bg-img/403.png') }}" width="500" alt="">
        <h5>Access Denied</h5>
        <p>This page is for authourized personel only!</p>
        <a class="btn btn-primary" href="{{ route('home') }}">Back Home</a>
      </div>
    </div>
  </div>
</div>
<!-- End Wrapper -->
@endsection
