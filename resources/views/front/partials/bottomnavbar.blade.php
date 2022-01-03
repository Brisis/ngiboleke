<!-- Footer Nav-->
<div class="footer-nav-area" id="footerNav">
  <div class="container h-100 px-0">
    <div class="suha-footer-nav h-100">
      <ul class="h-100 d-flex align-items-center justify-content-between ps-0">
        <li class="{{ request()->routeIs('home') ? 'active' : '' }}"><a href="{{ route('home') }}"><i class="lni lni-home"></i>Home</a></li>
        <li class="{{ request()->routeIs('merchants.*') ? 'active' : '' }}"><a href="{{ route('merchants.merchants') }}"><i class="lni lni-users"></i>merchants</a></li>
        <li class="{{ request()->routeIs('cart') ? 'active' : '' }}"><a href="{{ route('cart') }}"><i class="lni lni-shopping-basket"></i>Cart</a></li>
        <li class="{{ request()->routeIs('account.*') ? 'active' : '' }}"><a href="{{ route('account.dashboard') }}"><i class="lni lni-user"></i>Account</a></li>
        <li class="{{ request()->routeIs('settings') ? 'active' : '' }}"><a href="{{ route('settings') }}"><i class="lni lni-cog"></i>Settings</a></li>
      </ul>
    </div>
  </div>
</div>
