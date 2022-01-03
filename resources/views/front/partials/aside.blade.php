
<div class="offcanvas offcanvas-start suha-offcanvas-wrap" tabindex="-1" id="suhaOffcanvas" aria-labelledby="suhaOffcanvasLabel">
  <!-- Close button-->
  <button class="btn-close btn-close-white text-reset" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>

  @if (auth()->user())
  <!-- Offcanvas body-->
  <div class="offcanvas-body">
    <!-- Sidenav Profile-->
    <div class="sidenav-profile">
      <div class="user-profile">
        @if(auth()->user()->profile_picture)
          <img src="{{ asset(auth()->user()->profile_picture) }}" alt="Picture">
        @else
          <img src="{{ asset('static/img/user.png') }}" alt="Picture">
        @endif
      </div>
      <div class="user-info">
        <h6 class="user-name mb-1">{{ auth()->user()->fullname }}</h6>
        <p class="available-balance">{{ auth()->user()->email }}</span></p>
      </div>
    </div>
    <!-- Sidenav Nav-->
    <ul class="sidenav-nav ps-0">
      <li><a href="{{ route('merchants.merchants') }}"><i class="lni lni-users"></i>Merchants</a></li>
      <li><a href="{{ route('categories') }}"><i class="lni lni-grid-alt"></i>Categories</a></li>
      <li><a href="{{ route('blogs') }}"><i class="lni lni-indent-increase"></i>Blog</a></li>
      <li><a href="{{ route('about') }}"><i class="lni lni-library"></i>About</a></li>
      <li><a href="{{ route('contact') }}"><i class="lni lni-phone"></i>Contact</a></li>
      <li><a href="{{ route('faq') }}"><i class="lni lni-invention"></i>Faq</a></li>
      <li><a href="{{ route('terms') }}"><i class="lni lni-write"></i>Terms of use</a></li>
    </ul>
  </div>
  @else
  <!-- Offcanvas body-->
  <div class="offcanvas-body">
    <!-- Sidenav Profile-->
    <div class="sidenav-profile">
      <div class="user-profile">
          <img src="{{ asset('static/img/user.png') }}" alt="">
      </div>
      <div class="user-info">
        <h6 class="user-name mb-1">Account</h6>
      </div>
    </div>
    <!-- Sidenav Nav-->
    <ul class="sidenav-nav ps-0">
      <li><a href="{{ route('login') }}"><i class="lni lni-user"></i>Get Started</a></li>
      <li><a href="{{ route('merchants.merchants') }}"><i class="lni lni-users"></i>Merchants</a></li>
      <li><a href="{{ route('categories') }}"><i class="lni lni-grid-alt"></i>Categories</a></li>
      <li><a href="{{ route('blogs') }}"><i class="lni lni-indent-increase"></i>Blog</a></li>
      <li><a href="{{ route('about') }}"><i class="lni lni-library"></i>About</a></li>
      <li><a href="{{ route('contact') }}"><i class="lni lni-phone"></i>Contact</a></li>
      <li><a href="{{ route('faq') }}"><i class="lni lni-invention"></i>Faq</a></li>
      <li><a href="{{ route('terms') }}"><i class="lni lni-write"></i>Terms of use</a></li>
    </ul>
  </div>
  @endif
</div>

@if (Request::is('/'))
<!-- PWA Install Alert -->
<div class="toast pwa-install-alert shadow bg-white" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="5000" data-bs-autohide="true">
  <div class="toast-body">
    <div class="content d-flex align-items-center mb-2"><img src="{{ asset('static/img/icons/icon.png') }}" alt="">
      <h6 class="mb-0">Add to Home Screen</h6>
      <button class="btn-close ms-auto" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
    </div><span class="mb-0 d-block">Add Suha on your mobile home screen. Click the<strong class="mx-1">Add to Home Screen</strong>button &amp; enjoy it like a regular app.</span>
  </div>
</div>
@endif
