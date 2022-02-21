@extends('auth.layouts.base')

@section('content')

<!-- Login Wrapper Area-->
<div class="login-wrapper d-flex align-items-center justify-content-center text-center">
  <!-- Background Shape-->
  <div class="background-shape"></div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-9 col-md-7 col-lg-6 col-xl-5">
        <img class="big-logo" src="{{ asset('static/img/core-img/logo.svg') }}" style="filter: invert(100%);" width="200px;" alt="">
        <!-- Register Form-->
        <div class="register-form mt-5 px-4">
          <h4 class="text-white">Reset Password</h4>
          @if(session('status'))
            <div class="bg-red p-4 rounded-lg mb-3 text-white text-center">
              {{ session('status') }}
            </div>
          @endif
          <form action="{{ route('password.update') }}" method="post">
            @csrf
            <div class="form-group text-start mb-4"><span>Email</span>
              <label for="email"><i class="lni lni-user"></i></label>
              <input class="form-control" id="email" name="email" type="text" placeholder="info@example.com" value="{{ old('email') }}">
              @error('email') <span style="color:#ffaf00">( {{ $message }} )</span> @enderror
            </div>
            <div class="form-group text-start mb-4"><span>Password</span>
              <label for="password"><i class="lni lni-lock"></i></label>
              <input class="form-control" id="password" name="password" type="password" placeholder="Password" value="{{ old('password') }}">
              @error('password') <span style="color:#ffaf00">( {{ $message }} )</span> @enderror
            </div>
            <div class="form-group text-start mb-4"><span>Confirm Password</span>
              <label for="password_confirmation"><i class="lni lni-lock"></i></label>
              <input class="input-psswd form-control" id="confirmPassword" id="password_confirmation" name="password_confirmation" type="password" placeholder="Confirm Password">
              @error('password_confirmation') <span style="color:#ffaf00">( {{ $message }} )</span> @enderror
            </div>
            </div>
            <button class="btn btn-warning btn-lg w-100" type="submit">Reset Password</button>
          </form>
        </div>
        <!-- Login Meta-->
        <div class="login-meta-data"><a class="forgot-password d-block mt-3 mb-1" href="{{ route('forgot') }}">Forgot Password?</a>
          <p class="mb-0">Didn't have an account?<a class="ms-1" href="{{ route('register') }}">Register Now</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
