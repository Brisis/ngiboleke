@extends('seller.layouts.base')

@section('content')

    @include('seller.partials.aside')
    <main class="main-wrap">
        @include('seller.partials.header')
        <section class="content-main">
            <div class="content-header">
                <a href="{{ route('seller.dashboard') }}"><i class="material-icons md-arrow_back"></i> Go back </a>
            </div>
            <div class="card mb-4">
                <div class="card-header bg-primary" style="height:150px">
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl col-lg flex-grow-0" style="flex-basis:230px;">
                            <div class="img-thumbnail shadow w-100 bg-white position-relative text-center" style="height:190px; width:200px; margin-top:-120px;background-image: url({{ asset($merchant->merchant_cover) }}); background-size: cover;background-repeat:no-repeat;">
                              @if($merchant->merchant_logo)
                                <img src="{{ asset($merchant->merchant_logo) }}" class="center-xy img-fluid" alt="Logo Brand">
                              @else
                                <img src="{{ asset('static/img/ph.jpg') }}" class="center-xy img-fluid" alt="Logo Brand">
                              @endif
                            </div>
                        </div> <!--  col.// -->
                        <div class="col-xl col-lg">
                            <h3>{{ $merchant->name }}</h3>
                            <p>{{ $merchant->country }}, {{ $merchant->city }}</p>
                        </div> <!--  col.// -->
                        @if($merchant->verified)
                        <div class="col-xl-4 text-md-end">
                            <a target="_blank" href="{{ route('merchants.merchant', $merchant->username) }}" class="btn btn-primary"> View live <i class="material-icons md-launch"></i> </a>
                        </div> <!--  col.// -->
                        @endif
                    </div> <!-- card-body.// -->
                    <hr class="my-4">
                    <div class="row g-4">
                        <div class="col-md-12 col-lg-4 col-xl-2">
                            <article class="box">
                                <p class="mb-0 text-muted">Total Orders:</p>
                                <h5 class="text-success">0</h5>
                                <p class="mb-0 text-muted">Revenue:</p>
                                <h5 class="text-success mb-0">$0.00</h5>
                            </article>
                        </div> <!--  col.// -->
                        <div class="col-sm-6 col-lg-4 col-xl-5">
                            <h6>Contacts</h6>
                            <p>
                                Manager: {{ auth()->user()->firstname }} {{ auth()->user()->lastname }} <br>
                                Username: <a href="">@ {{ $merchant->username }}</a> <br>
                                Phone: {{ $merchant->country_code }} {{ $merchant->phone }}
                            </p>
                        </div> <!--  col.// -->
                        <div class="col-sm-6 col-lg-4 col-xl-5">
                            <h6>Address</h6>
                            <p>
                                Country: {{ $merchant->country }} <br>
                                City: {{ $merchant->city }} <br>
                                Address: {{ $merchant->address }}
                            </p>
                        </div> <!--  col.// -->
                    </div> <!--  row.// -->
                </div> <!--  card-body.// -->
            </div> <!--  card.// -->
            <div class="card mb-4">
                <div class="card-header">
                  <div class="row">
                    <div class="col-lg-4">
                      <a class="btn btn-md rounded font-sm" href="{{ route('seller.edit_picture') }}">Edit Profile Image</a>
                    </div>
                    <div class="col-lg-4">
                      <a class="btn btn-md rounded font-sm" href="{{ route('seller.edit_cover') }}">Edit Cover Image</a>
                    </div>
                    <div class="col-lg-4">
                      <a class="btn btn-md rounded font-sm" href="{{ route('seller.edit') }}">Edit Merchant Info</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                    <div class="row">
                      <div class="col-lg-12">
                        <h5 class="card-title">About Information</h5>
                        <div class="description">
                          {{ $merchant->description }}
                        </div>
                      </div>
                      <hr>
                      <div class="col-lg-12">
                        <h5 class="card-title">Intro Video</h5>
                        @if($merchant->video)
                          <iframe src="{{ $merchant->video }}" width="100%" height="250px"></iframe>
                        @endif
                      </div>
                      <hr>
                      <div class="col-lg-12">
                        <h5 class="card-title">Map Location</h5>
                        {{ $merchant->map_iframe }}
                      </div>
                    </div> <!-- row.// -->
                </div> <!--  card-body.// -->
            </div> <!--  card.// -->
        </section> <!-- content-main end// -->
        @include('seller.partials.footer')
    </main>

@endsection
