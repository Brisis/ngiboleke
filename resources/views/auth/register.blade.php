@extends('auth.layouts.base')

@section('content')

<!-- Register Wrapper Area-->
<div class="login-wrapper d-flex align-items-center justify-content-center text-center">
  <!-- Background Shape-->
  <div class="background-shape"></div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-9 col-md-7 col-lg-6 col-xl-5">
        <img class="big-logo" src="{{ asset('static/img/core-img/logo.svg') }}" style="filter: invert(100%);" width="200px;" alt="">
        <!-- Register Form-->
        <div class="register-form mt-5 px-4">
          <h4 class="text-white">Register</h4>
          @if(session('status'))
            <div class="bg-red p-4 rounded-lg mb-3 text-white text-center">
              {{ session('status') }}
            </div>
          @endif
          <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="form-group text-start mb-4"><span>Full Name </span>
              <label for="fullname"><i class="lni lni-user"></i></label>
              <input class="form-control" id="fullname" name="fullname" type="text" placeholder="Fistname" value="{{ old('fullname') }}">
              @error('fullname') <span style="color:#ffaf00">( {{ $message }} )</span> @enderror
            </div>
            <div class="form-group text-start mb-4"><span>Email</span>
              <label for="email"><i class="lni lni-envelope"></i></label>
              <input class="form-control" id="email" type="email" name="email" placeholder="example@domain.com" value="{{ old('email') }}">
              @error('email') <span style="color:#ffaf00">( {{ $message }} )</span> @enderror
            </div>
            <div class="form-group text-start mb-4"><span>Password</span>
              <label for="password"><i class="lni lni-lock"></i></label>
              <input class="input-psswd form-control" id="registerPassword" name="password" type="password" placeholder="Password">
              @error('password') <span style="color:#ffaf00">( {{ $message }} )</span> @enderror
            </div>
            <div class="form-group text-start mb-4"><span>Confirm Password</span>
              <label for="password_confirmation"><i class="lni lni-lock"></i></label>
              <input class="input-psswd form-control" id="confirmPassword" id="password_confirmation" name="password_confirmation" type="password" placeholder="Confirm Password">
              @error('password_confirmation') <span style="color:#ffaf00">( {{ $message }} )</span> @enderror
            </div>
            <!-- Login Meta-->
            <div class="login-meta-data">
              <p class="mb-2">I Agree with Ngiboleke's  <a class="ms-1" href="{{ route('terms') }}">TC's</a></p>
            </div>
            <button class="btn btn-warning btn-lg w-100" type="submit">Sign Up</button>
          </form>
        </div>
        <!-- Login Meta-->
        <div class="login-meta-data">
          <p class="mt-3 mb-0">Already have an account?<a class="ms-1" href="{{ route('login') }}">Sign In</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
