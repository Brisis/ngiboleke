@extends('auth.layouts.base')

@section('content')

    <!-- Login Wrapper Area-->
    <div class="login-wrapper d-flex align-items-center justify-content-center text-center bg-success">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-9 col-md-7 col-lg-6 col-xl-5">
            <img class="big-logo mb-3" src="{{ asset('static/img/core-img/logo.svg') }}" style="filter: invert(100%);" width="200px;" alt="">
            <h5 class="mb-3 text-white">Become a seller form</h5>
            <!-- Register Form-->
            @if(session()->has('err_message'))
              <div class="alert alert-warning bg-warning">
                <p class="text-white">{{ session()->get('err_message') }}</p>
              </div>
            @endif
            <div class="register-form mt-3 px-4">
              <form action="{{ route('create_shop') }}" method="post">
                @csrf
                <div class="form-group text-start mb-4"><span>Store Name*</span>
                  <label for="name"><i class="lni lni-cart"></i></label>
                  <input class="form-control" id="name" name="name" type="text" placeholder="Merchant">
                </div>
                <div class="form-group text-start mb-4"><span>Username*</span>
                  <label for="username"><i class="lni lni-user"></i></label>
                  <input class="form-control" id="username" name="username" type="text" placeholder="@username">
                </div>
                <div class="mb-4 form-group text-start">
                  <span>Select Country*</span>
                  @include('front.partials.countries_m')
                </div>
                <div class="form-group text-start mb-4"><span>City*</span>
                  <label for="location"><i class="lni lni-map"></i></label>
                  <input class="form-control" id="location" name="city" type="text" placeholder="City">
                </div>
                <div class="form-group text-start mb-4">
                  <div class="form-check">
                    <input class="form-check-input" id="acceptTerms" type="checkbox" value="" required>
                    <label class="form-check-label fz-14 text-white" for="acceptTerms">I have read and understood all the <a class="fz-14 text-warning text-decoration-underline" href="{{ route('terms') }}">terms &amp; conditions.</a></label>
                  </div>
                </div>
                <button class="btn btn-warning btn-lg w-100" type="submit">Register Merchant</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    @endsection
