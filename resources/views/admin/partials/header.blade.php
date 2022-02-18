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
         <button class="btn btn-danger" type="submit"><i class="material-icons md-power_settings_new"></i> Logout</button>
       </form>
      </div>
    </div>
  </div>
</div>

<header class="main-header navbar">
    <div class="col-search">
        <!-- <form class="searchform">
            <div class="input-group">
                <input list="search_terms" type="text" class="form-control" placeholder="Search term">
                <button class="btn btn-light bg" type="button"> <i class="material-icons md-search"></i></button>
            </div>
        </form> -->
    </div>
    <div class="col-nav">
        <button class="btn btn-icon btn-mobile me-auto" data-trigger="#offcanvas_aside"> <i class="material-icons md-apps"></i> </button>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link btn-icon darkmode" href="#"> <i class="material-icons md-nights_stay"></i> </a>
            </li>
            <li class="nav-item">
                <a href="#" class="requestfullscreen nav-link btn-icon"><i class="material-icons md-cast"></i></a>
            </li>
            <li class="dropdown nav-item">
                <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" id="dropdownAccount" aria-expanded="false">
                  @if(auth()->user()->profile_picture)
                    <img class="img-xs rounded-circle" src="{{ asset(auth()->user()->profile_picture) }}" alt="Picture">
                  @else
                    <img class="img-xs rounded-circle" src="{{ asset('static/img/user.png') }}" alt="Picture">
                  @endif
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownAccount">
                    <a class="dropdown-item" target="_blank" href="{{ route('home') }}"><i class="material-icons md-home"></i>Get Home</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" data-bs-toggle="modal" data-bs-target="#logoutModal" href="#"><i class="material-icons md-exit_to_app"></i>Logout</a>
                </div>
            </li>
        </ul>
    </div>
</header>
