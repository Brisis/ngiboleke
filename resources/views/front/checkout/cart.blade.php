@extends('front.layouts.app')

@section('content')

    <!-- Header Area-->
    <div class="header-area" id="headerArea">
      <div class="container h-100 d-flex align-items-center justify-content-between">
        <!-- Back Button-->
        <div class="back-button"><a href="javascript:history.back()">
            <svg class="bi bi-arrow-left" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"></path>
            </svg></a></div>
        <!-- Page Title-->
        <div class="page-heading">
          <h6 class="mb-0">My Cart</h6>
        </div>
        <!-- Navbar Toggler-->
        <div class="suha-navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#suhaOffcanvas" aria-controls="suhaOffcanvas"><span></span><span></span><span></span></div>
      </div>
    </div>

    @include('front.partials.aside')

    @if(session('cart'))
    <div class="page-content-wrapper">
      <div class="container">
        <!-- Cart Wrapper-->
        <div class="cart-wrapper-area py-3">
          <div class="cart-table card mb-3">
            <div class="table-responsive card-body">
              <table class="table mb-0">
                <tbody>
                  <?php $total = 0 ?>

                  @foreach(session('cart') as $id => $details)
                    <?php $total += $details['price'] * $details['quantity'] ?>
                    <tr class="row" data-id="{{ $id }}">
                      <th class="col-3 col-md-3" scope="row">
                        <a class="remove-product remove-from-cart" href="javascript:void()" title="Delete Product" data-id="{{ $id }}"><i class="lni lni-trash"></i></a>
                      </th>
                      <td class="col-3 col-md-3">
                        <a href="{{ route('product', $details['slug']) }}">
                          <img class="rounded" src="{{ $details['image'] }}" alt="">
                        </a>
                      </td>
                      <td class="col-6 col-md-3">
                        <a href="{{ route('product', $details['slug']) }}">{{ $details['name'] }}<span>$@money($details['price']) × {{ $details['quantity'] }}</span></a>
                      </td>
                      <td class="d-flex justify-content-between col-12 col-md-3">
                        <div class="quantity">
                          <input class="qty-text quantityf" type="number" min="1" step="1" value="{{ $details['quantity'] }}" style="width:100px;">
                        </div>
                        <div class="quantity">
                          <button class="btn btn-success btn-sm update-cart" data-id="{{ $id }}">Update</button>
                        </div>
                      </td>
                    </tr>
                    @endforeach

                  <tr class="row">
                    <td class="col-12 col-md-12">
                      <form class="" action="{{ route('remove_all') }}" method="post">
                        @csrf
                        <button class="btn btn-danger">Empty Cart</button>
                      </form>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- Coupon Area-->
          <div class="card coupon-card mb-3">
            <div class="card-body">
              <div class="apply-coupon">
                <h6 class="mb-0">Have a coupon? <span class="badge badge-danger">Service unavailable</span> </h6>
                <p class="mb-2">Enter your coupon code here &amp; get awesome discounts!</p>
                <div class="coupon-form">
                  <form action="#">
                    <input class="form-control" type="text" placeholder="NGLK00">
                    <button disabled class="btn btn-primary" type="submit">Apply</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- Cart Amount Area-->
          <div class="card cart-amount-area">
            <div class="card-body d-flex align-items-center justify-content-between">
              <h5 class="total-price mb-0">$@money($total)</h5>
              <a class="btn btn-warning" href="{{ route('checkout') }}">Checkout Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    @else

    <!-- Page Content Wrapper-->
    <div class="page-content-wrapper">
      <div class="container">
        <!-- Offline Area-->
        <div class="offline-area-wrapper py-3 d-flex align-items-center justify-content-center">
          <div class="offline-text text-center">
            <img class="mb-4 px-4" src="{{ asset('static/img/bg-img/empty-cart.png') }}" width="500" alt="">
            <h5>Shopping Bag Empty</h5>
            <a class="btn btn-primary" href="{{ route('categories') }}">Explore More</a>
          </div>
        </div>
      </div>
    </div>
    <!-- End Wrapper -->

    @endif

    @include('front.partials.bottomnavbar')

    @endsection
