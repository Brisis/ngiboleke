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
          <h6 class="mb-0">Edit Account Picture</h6>
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
            <div class="card-body p-4 d-flex align-items-center">
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
          </div>
          <!-- User Meta Data-->
          <div class="card user-data-card">
            <div class="card-body">
              @if(session()->has('message'))
                <div class="alert alert-success bg-success">
                  <p class="text-white">{{ session()->get('message') }}</p>
                </div>
              @endif
              @error('image')
                <div class="alert alert-success bg-success">
                  <p class="text-white">{{ session()->get('message') }}</p>
                </div>
              @enderror
              <form action="{{ route('account.edit_picture') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <div class="title mb-2"><i class="lni lni-gallery"></i><span>Chosen Picture</span></div>
                  <img width="180px" src="{{ asset('static/img/ph.jpg') }}" alt="picture preview" id="picture">
                </div>
                <div class="mb-3">
                  <div class="title mb-2"><i class="lni lni-camera"></i><span>Account Picture</span></div>
                  <input id="pictureInput" class="form-control" type="file" accept="image/*" name="image">
                </div>
                <button class="btn btn-success w-100" type="submit">Save Changes</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      pictureInput.onchange = evt => {
        const [file] = pictureInput.files
        if (file) {
          picture.src = URL.createObjectURL(file)
        }
      }
    </script>

    @include('front.partials.bottomnavbar')

    @endsection
