@extends('auth.layouts.base')

@section('content')

    <!-- Login Wrapper Area-->
    <div class="login-wrapper d-flex align-items-center justify-content-center text-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-9 col-md-7 col-lg-6 col-xl-5">
          <img class="big-logo" src="{{ asset('static/img/core-img/logo.svg') }}" style="filter: invert(100%);" width="200px;" alt="">
            <!-- Register Form-->
            <div class="register-form mt-5 px-4">
              <h4 class="text-white">Forgot Password</h4>
              @if(session('status'))
                <div class="bg-red p-4 rounded-lg mb-3 text-white text-center">
                  {{ session('status') }}
                </div>
              @endif
              <form action="{{ route('password.email') }}" method="post">
                @csrf
                <div class="form-group text-start mb-4"><span>Email</span>
                  <label for="email"><i class="lni lni-user"></i></label>
                  <input class="form-control" id="email" name="email" type="text" placeholder="info@example.com" value="{{ old('email') }}">
                  @error('email') <span style="color:#ffaf00">( {{ $message }} )</span> @enderror
                </div>
                <button class="btn btn-warning btn-lg w-100" type="submit">Reset Password</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
