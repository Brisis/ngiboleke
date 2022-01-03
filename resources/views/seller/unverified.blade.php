@extends('seller.layouts.base')

@section('content')

    @include('seller.partials.aside')
    <main class="main-wrap">
        @include('seller.partials.header')
        <section class="content-main mt-80 mb-80">
            <div class="card mx-auto card-login">
                @if(!auth()->user()->merchant->verified && count(auth()->user()->verifications) == 2)
                <div class="card-body">
                    <h4 class="card-title mb-4 text-center">Merchant not Verified</h4>
                      <p>You are seeing this because your Merchant Account verification is in process.</p>
                      <p>Hold on, we will get back to you in a gif.</p>
                      <!--<p>If you have not applied for verification, <a class="badge bg-primary" href="{{ route('seller.verify') }}">click here</a> to verify your account</p>-->
                </div>
                @else
                <div class="card-body">
                    <h4 class="card-title mb-4 text-center">Merchant not Verified</h4>
                      <p>You are seeing this because your Merchant Account has not been verified.</p>
                      <p>Go to registration page.</p>
                      <p>Plese verify: <a class="badge bg-primary" href="{{ route('seller.verify') }}">click here</a> to verify your account</p>
                </div>
                @endif
            </div>
        </section>
        @include('seller.partials.footer')
    </main>

@endsection
