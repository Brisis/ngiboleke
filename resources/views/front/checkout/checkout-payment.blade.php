@extends('front.layouts.app')

@section('content')

    <!-- Header Area-->
    <div class="header-area" id="headerArea">
      <div class="container h-100 d-flex align-items-center justify-content-between">
        <!-- Back Button-->
        <div class="back-button"><a href="{{ route('checkout') }}">
            <svg class="bi bi-arrow-left" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"></path>
            </svg></a></div>
        <!-- Page Title-->
        <div class="page-heading">
          <h6 class="mb-0">Complete Payment</h6>
        </div>
        <!-- Navbar Toggler-->
        <div class="suha-navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#suhaOffcanvas" aria-controls="suhaOffcanvas"><span></span><span></span><span></span></div>
      </div>
    </div>

    @include('front.partials.aside')

    <div>
      <?php $total = 0;?>
       @if(session('cart'))
           @foreach(session('cart') as $id => $details)
               <?php $total += $details['price'] * $details['quantity'] ?>
           @endforeach
       @endif
    </div>

    <div class="page-content-wrapper">
      <div class="container">
        <!-- Checkout Wrapper-->
        <div class="checkout-wrapper-area py-3">
          <!-- Choose Payment Method-->
          <div class="choose-payment-method">
            <h6 class="mb-3 text-center">Choose Payment Method</h6>
            <div class="row justify-content-center g-3">
              <!-- Single Payment Method-->
              <div class="col-12 col-md-12">
                <div class="single-payment-method">
                  <a class="credit-card" href="javascript:void()">
                    <svg class="bi bi-credit-card-2-front mb-2 text-dark" xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" viewBox="0 0 16 16">
                      <path d="M14 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z"></path>
                      <path d="M2 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1zm0 3a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z"></path>
                    </svg>
                    <h6>Credit Card</h6>
                  </a>
                </div>
              </div>

              <div class="col-12 col-md-12">
                <h3 class="text-center">OR</h3>
              </div>

              <!-- Single Payment Method-->
              <div class="col-12 col-md-12">
                <div class="single-payment-method">
                <!-- Coupon Area-->
                <div class="card coupon-card mb-3">
                  <div class="card-body">
                    <div class="apply-coupon">
                      <h6 class="mb-0">Have an Ecocash Account?</h6>
                      <p class="mb-2">Enter your mobile number below!</p>
                      <div class="coupon-form">
                        <form action="#">
                          <input class="form-control" type="text" placeholder="077....">
                          <button class="btn btn-primary" type="submit">Pay</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    @include('front.partials.bottomnavbar')

    @endsection
