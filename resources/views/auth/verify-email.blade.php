@extends('auth.layouts.base')

@section('content')

    <div class="login-wrapper d-flex align-items-center justify-content-center text-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-9 col-md-7 col-lg-6 col-xl-5">
            <div class="px-4">
              <h4 class="text-white">Verify your Email</h4>
              @if(session('message'))
                <div class="theme-color p-4 mb-3 text-center">
                  {{ session('message') }}
                </div>
              @endif
              <!-- Success Check-->
              <div class="success-check"><i class="lni lni-emoji-smile"></i></div>
              <!-- Reset Password Message-->
              <p class="text-white mt-4 mb-4">Password recovery email was sent to {{auth()->user()->email}} successfully. Please check your inbox!</p>
              <form action="{{ route('verification.send') }}" method="post">
                @csrf
                  <button type="submit" class="btn btn-warning btn-lg w-100">Resend Verification</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  @endsection
