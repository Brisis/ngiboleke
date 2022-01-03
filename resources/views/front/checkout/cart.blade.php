@extends('front.layouts.app')

@section('content')

    <!-- Header Area-->
    <div class="header-area" id="headerArea">
      <div class="container h-100 d-flex align-items-center justify-content-between">
        <!-- Back Button-->
        <div class="back-button"><a href="{{ route('categories') }}">
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

    <div class="page-content-wrapper">
      <div class="container">
        <!-- Cart Wrapper-->
        <div class="cart-wrapper-area py-3">
          <div class="cart-table card mb-3">
            <div class="table-responsive card-body">
              <table class="table mb-0">
                <tbody>
                  <?php $total = 0 ?>
                  @if(session('cart'))
                  @foreach(session('cart') as $id => $details)
                    <?php $total += $details['price'] * $details['quantity'] ?>
                    <tr data-id="{{ $id }}">
                      <th scope="row">
                        <a class="remove-product remove-from-cart" href="#" data-id="{{ $id }}"><i class="lni lni-close"></i></a>
                      </th>
                      <td><img class="rounded" src="{{ $details['image'] }}" alt=""></td>
                      <td><a href="{{ route('product', $details['slug']) }}">{{ $details['name'] }}<span>$@money($details['price']) × {{ $details['quantity'] }}</span></a></td>
                      <td>
                        <div class="quantity">
                          <a class="remove-product" style="background: green" href="{{ route('add_to_cart', $details['item_id']) }}"><i class="lni lni-plus"></i></a>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  @endif

                  <tr>
                    <td>
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
                <h6 class="mb-0">Have a coupon?</h6>
                <p class="mb-2">Enter your coupon code here &amp; get awesome discounts!</p>
                <div class="coupon-form">
                  <form action="#">
                    <input class="form-control" type="text" placeholder="SUHA30">
                    <button class="btn btn-primary" type="submit">Apply</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- Cart Amount Area-->
          <div class="card cart-amount-area">
            <div class="card-body d-flex align-items-center justify-content-between">
              <h5 class="total-price mb-0">$<span class="counter">@convert($total)</span></h5>
              <a class="btn btn-warning" href="{{ route('checkout') }}">Checkout Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    @include('front.partials.bottomnavbar')

    @endsection
