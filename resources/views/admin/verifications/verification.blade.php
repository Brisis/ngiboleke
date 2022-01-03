@extends('admin.layouts.base')

@section('content')

    @include('admin.partials.aside')
    <main class="main-wrap">
        @include('admin.partials.header')
        <section class="content-main">
            <div class="row">
                <form action="{{ route('admin.verifications.verification', $verification->id) }}" method="post">
                  @csrf
                  <div class="col-9">
                      <div class="content-header">
                          <h2 class="content-title">Purpose: {{ $verification->purpose }}</h2>
                          @if(!$verification->user->is_verified)
                          <div>
                              <button class="btn btn-md rounded font-sm hover-up"><i class="material-icons md-verified"></i> Verify</button>
                          </div>
                          @endif
                      </div>
                  </div>
                  @if(session()->has('message'))
                  <div class="col-9">
                    <div class="card alert alert-success bg-success">
                      <div class="card-body">
                        <p class="text-white">{{ session()->get('message') }}</p>
                      </div>
                    </div>
                  </div>
                  @endif
                </form>

                <div class="col-9">
                  <div class="card mb-4">
                    <div class="card-header">
                        <h4>Verify: {{ $verification->user->firstname }} {{ $verification->user->lastname }} @if($verification->user->is_verified) <i class="icon material-icons md-verified"></i> @endif</h4>
                    </div>
                  </div>
                </div>

                <!-- File -->
                <div class="col-lg-9">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Verification Identification</h4>
                        </div>
                        <div class="card-body">
                          <div class="row gx-3 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 row-cols-xxl-5 mb-3">
                            <div class="col">
                              <div class="card card-product-grid">
                                  <a href="{{ asset($verification->identification) }}" class="img-wrap">
                                    <img src="{{ asset($verification->identification) }}" alt="identification">
                                  </a>
                                  <div class="info-wrap">
                                      <a href="{{ asset($verification->identification) }}" class="btn btn-sm font-sm btn-light rounded">
                                          <i class="material-icons md-link"></i> Open File
                                      </a>
                                  </div>
                              </div> <!-- card-product  end// -->
                            </div>
                          </div>
                        </div>
                    </div> <!-- card end// -->
                </div>
                <!-- -->
            </div>
        </section> <!-- content-main end// -->
        @include('admin.partials.footer')
    </main>

@endsection
