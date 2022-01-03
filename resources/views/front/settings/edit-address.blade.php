    @extends('front.layouts.app')

    @section('content')

    <!-- Header Area-->
    <div class="header-area" id="headerArea">
      <div class="container h-100 d-flex align-items-center justify-content-between">
        <!-- Back Button-->
        <div class="back-button"><a href="{{ route('account.settings') }}">
            <svg class="bi bi-arrow-left" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"></path>
            </svg></a></div>
        <!-- Page Title-->
        <div class="page-heading">
          <h6 class="mb-0">Edit Account Address</h6>
        </div>
        <!-- Navbar Toggler-->
        <div class="suha-navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#suhaOffcanvas" aria-controls="suhaOffcanvas"><span></span><span></span><span></span></div>
      </div>
    </div>

    @include('front.partials.aside')

    <div class="page-content-wrapper">
      <div class="container">
        <!-- Profile Wrapper-->
        <div class="profile-wrapper-area py-3">
          <!-- User Meta Data-->
          <div class="card user-data-card">
            <div class="card-body">
              @if(session()->has('message'))
                <div class="alert alert-success bg-success">
                  <p class="text-white">{{ session()->get('message') }}</p>
                </div>
              @endif
              @if(!auth()->user()->addresses)
              <form action="{{ route('account.edit_address') }}" method="post">
                @csrf
                <div class="mb-3">
                  <div class="title mb-2">
                    <i class="lni lni-world"></i><span>Country</span>
                  </div>
                  @include('front.partials.account_countries')
                </div>
                <div class="mb-3">
                  <div class="title mb-2"><i class="lni lni-apartment"></i><span>City / State</span></div>
                  <input class="form-control" type="text" name="city" placeholder="city of residence" required>
                </div>
                <div class="mb-3">
                  <div class="title mb-2"><i class="lni lni-phone"></i><span>Phone</span></div>
                  <input class="form-control" type="text" name="phone" placeholder="mobile number (+263 --- ---)" required>
                </div>
                <div class="mb-3">
                  <div class="title mb-2"><i class="lni lni-map-marker"></i><span>Shipping Address</span></div>
                  <textarea class="form-control" rows="4" name="shipping" placeholder="Shipping address where your orders will be delivered" required></textarea>
                </div>
                <button class="btn btn-success w-100" type="submit">Save Changes</button>
              </form>
              @else
              <form action="{{ route('account.edit_address') }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                  <div class="title mb-2">
                    <i class="lni lni-world"></i><span>Country ({{ auth()->user()->addresses->country }})</span>
                  </div>
                  @include('front.partials.account_countries')
                </div>
                <div class="mb-3">
                  <div class="title mb-2"><i class="lni lni-apartment"></i><span>City / State</span></div>
                  <input class="form-control" type="text" value="{{ auth()->user()->addresses->city }}" name="city" required>
                </div>
                <div class="mb-3">
                  <div class="title mb-2"><i class="lni lni-phone"></i><span>Phone</span></div>
                  <input class="form-control" type="text" value="{{ auth()->user()->addresses->phone }}" name="phone" required>
                </div>
                <div class="mb-3">
                  <div class="title mb-2"><i class="lni lni-map-marker"></i><span>Shipping Address</span></div>
                  <textarea class="form-control" rows="4" name="shipping" placeholder="Shipping address where your orders will be delivered" required>{{ auth()->user()->addresses->shipping }}</textarea>
                </div>
                <button class="btn btn-success w-100" type="submit">Update Changes</button>
              </form>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>

    @include('front.partials.bottomnavbar')

    @endsection
