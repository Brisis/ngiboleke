<div class="screen-overlay"></div>
<aside class="navbar-aside" id="offcanvas_aside">
    <div class="aside-top">
        <a href="{{ route('admin.dashboard') }}" class="brand-wrap">
            <img src="{{ asset('static/img/core-img/logo.svg') }}" class="logo" alt="Ngiboleke Dashboard">
        </a>
        <div>
            <button class="btn btn-icon btn-aside-minimize"> <i class="text-muted material-icons md-menu_open"></i> </button>
        </div>
    </div>
    <nav>
        <ul class="menu-aside">
            <li class="menu-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <a class="menu-link" href="{{ route('admin.dashboard') }}"> <i class="icon material-icons md-home"></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li class="menu-item {{ request()->routeIs('admin.users') ? 'active' : '' }}">
                <a class="menu-link" href="{{ route('admin.users') }}"> <i class="icon material-icons md-people"></i>
                    <span class="text">Users</span>
                </a>
            </li>
            <li class="menu-item {{ request()->routeIs('admin.verifications.*') ? 'active' : '' }}">
                <a class="menu-link" href="{{ route('admin.verifications.verifications') }}"> <i class="icon material-icons md-verified"></i>
                    <span class="text">Verifications</span>
                </a>
            </li>
            <li class="menu-item {{ request()->routeIs('admin.products.*') ? 'active' : '' }}">
                <a class="menu-link" href="{{ route('admin.products.products') }}"> <i class="icon material-icons md-shopping_bag"></i>
                    <span class="text">Products</span>
                </a>
            </li>
            <li class="menu-item {{ request()->routeIs('admin.categories.*') ? 'active' : '' }}">
                <a class="menu-link" href="{{ route('admin.categories.categories') }}"> <i class="icon material-icons md-apps"></i>
                    <span class="text">Categories</span>
                </a>
            </li>
            <li class="menu-item {{ request()->routeIs('admin.orders.*') ? 'active' : '' }}">
                <a class="menu-link" href="{{ route('admin.orders.orders') }}"> <i class="icon material-icons md-shopping_cart"></i>
                    <span class="text">Orders</span>
                </a>
            </li>
            <li class="menu-item {{ request()->routeIs('admin.sellers.*') ? 'active' : '' }}">
                <a class="menu-link" href="{{ route('admin.sellers.sellers') }}"> <i class="icon material-icons md-store"></i>
                    <span class="text">Sellers</span>
                </a>
            </li>
            <li class="menu-item {{ request()->routeIs('admin.statistics.*') ? 'active' : '' }}">
                <a class="menu-link" href="{{ route('admin.statistics.statistics') }}"> <i class="icon material-icons md-pie_chart"></i>
                    <span class="text">Statistics</span>
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
                    <a href="{{ route('admin.settings') }}">Account</a>
                    <a href="{{ route('admin.settings') }}">System</a>
                    <a href="{{ route('admin.settings') }}">Logout</a>
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
