<div class="screen-overlay"></div>
<aside class="navbar-aside" id="offcanvas_aside">
    <div class="aside-top">
        <a href="{{ route('seller.dashboard') }}" class="brand-wrap">
            <img src="{{ asset('static/img/core-img/logo.svg') }}" class="logo" alt="Ngiboleke Dashboard">
        </a>
        <div>
            <button class="btn btn-icon btn-aside-minimize"> <i class="text-muted material-icons md-menu_open"></i> </button>
        </div>
    </div>
    <nav>
        <ul class="menu-aside">
            <li class="menu-item {{ request()->routeIs('seller.dashboard') ? 'active' : '' }}">
                <a class="menu-link" href="{{ route('seller.dashboard') }}"> <i class="icon material-icons md-home"></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li class="menu-item {{ request()->routeIs('seller.customers') ? 'active' : '' }}">
                <a class="menu-link" href="{{ route('seller.customers') }}"> <i class="icon material-icons md-people"></i>
                    <span class="text">Customers</span>
                </a>
            </li>
            <li class="menu-item {{ request()->routeIs('seller.products.*') ? 'active' : '' }}">
                <a class="menu-link" href="{{ route('seller.products.products') }}"> <i class="icon material-icons md-shopping_bag"></i>
                    <span class="text">Products</span>
                </a>
            </li>
            <li class="menu-item {{ request()->routeIs('seller.orders') ? 'active' : '' }}">
                <a class="menu-link" href="{{ route('seller.orders') }}"> <i class="icon material-icons md-shopping_cart"></i>
                    <span class="text">Orders</span>
                </a>
            </li>
            <li class="menu-item {{ request()->routeIs('seller.reviews') ? 'active' : '' }}">
                <a class="menu-link" href="{{ route('seller.reviews') }}"> <i class="icon material-icons md-comment"></i>
                    <span class="text">Reviews</span>
                </a>
            </li>
        </ul>
        <hr>
        <ul class="menu-aside">
            <li class="menu-item has-submenu">
                <a class="menu-link" href="#"> <i class="icon material-icons md-settings"></i>
                    <span class="text">Settings</span>
                </a>
                <div class="submenu">
                    <a href="{{ route('seller.edit') }}">Account</a>
                    <a href="{{ route('seller.settings') }}">System</a>
                    <a data-bs-toggle="modal" data-bs-target="#logoutModal" href="#">Logout</a>
                </div>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="{{ route('home') }}"> <i class="icon material-icons md-login"></i>
                    <span class="text"> Go Home </span>
                </a>
            </li>
        </ul>
        <br>
        <br>
    </nav>
</aside>
