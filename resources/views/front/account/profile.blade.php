    @extends('front.layouts.app')

    @section('content')

    <!-- Modal -->
    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="logoutModalLabel">Logging Out of Account</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Are you sure you want to Log Out?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <form action="{{ route('logout') }}" method="post" class="p-3 inline">
             @csrf
             <button class="btn btn-danger" type="submit"><i class="lni lni-power-switch"></i> Logout</button>
           </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Header Area-->
    <div class="header-area" id="headerArea">
      <div class="container h-100 d-flex align-items-center justify-content-between">
        <!-- Back Button-->
        <div class="back-button"><a href="{{ route('home') }}">
            <svg class="bi bi-arrow-left" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"></path>
            </svg></a></div>
        <!-- Page Title-->
        <div class="page-heading">
          <h6 class="mb-0">My Account</h6>
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
          <!-- User Information-->
          <div class="card user-info-card">
            <div class="card-body p-4 d-flex justify-content-between">
              <div class="d-flex align-items-center">
                <div class="user-profile me-3">
                  @if(auth()->user()->profile_picture)
                    <img src="{{ asset(auth()->user()->profile_picture) }}" alt="Picture">
                  @else
                    <img src="{{ asset('static/img/user.png') }}" alt="Picture">
                  @endif
                </div>
                <div class="user-info">
                  <h5 class="mb-2">{{ auth()->user()->fullname }}</h5>
                  <p class="mb-0">
                    @if(auth()->user()->is_verified)
                      <span class="badge badge-success text-white">Verified <i class="lni lni-protection text-success"></i></span>
                    @endif

                    @if(!auth()->user()->is_verified)
                      @if(count(auth()->user()->verifications) >= 1)
                        <a class="badge badge-danger text-white" href="#!"><i class="lni lni-shield"></i> Pending Verification</a>
                      @else
                        <a class="badge badge-primary text-white" href="{{ route('account.verify') }}"><i class="lni lni-shield"></i> Verify Account</a>
                      @endif
                    @endif
                  </p>
                </div>
              </div>
              <div class="account-right">
                <!-- @if(auth()->user()->is_seller)
                  <a class="badge badge-warning" href="{{ route('seller.dashboard') }}"><i class="lni lni-cart-full"></i> My Shop</a>
                  @else
                  <a class="badge badge-warning" href="{{ route('create_shop') }}"><i class="lni lni-cart-full"></i> Register Shop</a>
                @endif -->
                <!-- Button trigger modal -->

              </div>
            </div>
          </div>
          <!-- User Meta Data-->
          <div class="card user-data-card">
            <div class="card-body">
              <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center"><i class="lni lni-user"></i><span>Full Name</span></div>
                <div class="data-content">{{ auth()->user()->fullname }}</div>
              </div>
              <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center"><i class="lni lni-phone"></i><span>Phone</span></div>
                <div class="data-content">
                  @if(auth()->user()->addresses) {{ auth()->user()->addresses->phone }} @else N/A @endif
                </div>
              </div>
              <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center"><i class="lni lni-envelope"></i><span>Email Address</span></div>
                <div class="data-content">
                  {{ auth()->user()->email }}
                </div>
              </div>
              <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center"><i class="lni lni-map-marker"></i><span>Shipping</span></div>
                <div class="data-content">
                  @if(auth()->user()->addresses) {{ auth()->user()->addresses->shipping }} @else N/A @endif
                </div>
              </div>
              <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center"><i class="lni lni-delivery"></i><span>My Orders</span></div>
                <div class="data-content"><a class="btn btn-success btn-sm" href="{{ route('account.orders') }}">View</a></div>
              </div>
              <!-- <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center"><i class="lni lni-alarm"></i><span>Notifications</span></div>
                <div class="data-content"><a class="btn btn-success btn-sm" href="{{ route('account.notifications') }}">View</a></div>
              </div> -->
              <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center"><i class="lni lni-heart"></i><span>My Wishlist</span></div>
                <div class="data-content"><a class="btn btn-success btn-sm" href="{{ route('account.wishlist') }}">View</a></div>
              </div>
              <div class="single-profile-data d-flex align-items-center justify-content-between">
                <div class="title d-flex align-items-center"><i class="lni lni-power-switch"></i><span>Account</span></div>
                <div class="data-content">
                  <button class="btn btn-danger btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#logoutModal"><i class="lni lni-power-switch"></i> Sign Out</button>
                </div>
              </div>
              <!-- Edit Profile-->
              <div class="edit-profile-btn mt-3">
                <a class="btn btn-warning w-100" href="{{ route('account.settings') }}"><i class="lni lni-pencil me-2"></i>Edit Profile</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    @include('front.partials.bottomnavbar')

    @endsection
