@extends('auth.layouts.base')

@section('content')
      <style media="screen">
        .otp-form select.form-select {
          width: 100% !important;
          max-width: none;
        }
      </style>
    <!-- Login Wrapper Area-->
    <div class="login-wrapper d-flex align-items-center justify-content-center text-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-9 col-md-7 col-lg-6 col-xl-5">
            <img class="big-logo mb-3" src="{{ asset('static/img/core-img/logo.svg') }}" style="filter: invert(100%);" width="200px;" alt="">
            <div class="text-start px-4">
              <h5 class="mb-1 text-white">Ngiboleke Account Verification</h5>
              <p class="mb-4 text-warning">Please provide correct Information for a successful verification process.</p>
            </div>
            <!-- OTP Send Form-->
            <div class="register-form otp-form mt-3 mx-4">
              <form action="{{ route('account.verify') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group text-start mb-4">
                  <span>Email</span>
                  <input class="form-control" id="email" name="email" type="text" placeholder="Email address" value="{{ old('email') }}" required>
                  @error('email') <span style="color:#ffaf00">( {{ $message }} )</span> @enderror
                </div>
                <div class="mb-4 form-group text-start">
                  <span>Verification Type</span>
                  <select class="form-select" name="purpose" required>
                    <option value="Customer Verification" selected>Customer Verification</option>
                  </select>
                </div>
                <div class="form-group text-start mb-4">
                  <span>National Identification Document</span>
                  <input class="form-control" id="identification" name="identification" type="file" required>
                  @error('identification') <span style="color:#ffaf00">( {{ $message }} )</span> @enderror
                </div>
                <button class="btn btn-warning btn-lg w-100" type="submit">Send Details</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  @endsection
