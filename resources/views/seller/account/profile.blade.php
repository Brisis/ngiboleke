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
                                <img src="{{ asset($merchant->merchant_logo) }}" class="center-xy img-fluid rounded-circle" alt="Logo Brand">
                              @else
                                <img src="{{ asset('static/img/ph.jpg') }}" class="center-xy img-fluid rounded-circle" alt="Logo Brand">
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
                </div> <!--  card-body.// -->
            </div> <!--  card.// -->

            <div class="card mb-4">
              <form action="{{ route('seller.edit')}}" method="post">
                <div class="card-header d-flex justify-content-between">
                  <h4>Merchant Info</h4>
                  <button type="submit" class="btn btn-sm font-sm rounded btn-brand"><i class="material-icons md-save"></i>Save Changes</button>
                </div>

                  @csrf
                  <div class="card-body">
                      <div class="mb-4">
                          <label for="name" class="form-label">Merchant Name</label>
                          <input type="text" placeholder="Type here" class="form-control" id="name" name="name" value="{{ $merchant->name }}">
                      </div>

                      <div class="row">
                          <div class="col-lg-6">
                            <div class="mb-4">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" placeholder="Type here" class="form-control" id="username" name="username" value="{{ $merchant->username }}">
                            </div>
                          </div>
                          <div class="col-lg-6">
                              <div class="mb-4">
                                  <label class="form-label">Phone Number</label>
                                  <input placeholder="+1234567890" type="text" class="form-control" name="phone" value="{{ $merchant->phone }}">
                              </div>
                          </div>
                      </div>

                      <div class="mb-4">
                          <label for="name" class="form-label">Country (selected: {{ $merchant->country }})</label>
                            @include('seller.partials.countries_m')
                      </div>

                      <div class="mb-4">
                          <label for="city" class="form-label">City</label>
                          <input type="text" placeholder="Type here" class="form-control" id="city" name="city" value="{{ $merchant->city }}">
                      </div>

                      <div class="mb-4">
                          <label class="form-label">Merchant Street Address</label>
                          <textarea placeholder="Type here" class="form-control" rows="4" name="address">{{ $merchant->address }}</textarea>
                      </div>

                      <div class="mb-4">
                          <label for="video" class="form-label">Intro Video</label>
                          <input type="text" placeholder="Paste Youtube Url" class="form-control" id="video" name="video" value="{{ $merchant->video }}">
                      </div>
                      <div class="mb-4">
                          <label class="form-label">About Merchant</label>
                          <textarea placeholder="Type here" class="form-control" rows="4" name="description">{{ $merchant->description }}</textarea>
                      </div>
                  </div>
                </form>
            </div> <!--  card.// -->

            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between">
                  <h4>Profile Image</h4>
                  <a href="{{ route('seller.edit_picture') }}" class="btn btn-sm font-sm rounded btn-brand"><i class="material-icons md-edit"></i></a>
                </div>
                <div class="card-body">

                </div> <!--  card-body.// -->
            </div> <!--  card.// -->

            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between">
                  <h4>Cover Image</h4>
                  <a href="{{ route('seller.edit_cover') }}" class="btn btn-sm font-sm rounded btn-brand"><i class="material-icons md-edit"></i></a>
                </div>
                <div class="card-body">

                </div> <!--  card-body.// -->
            </div> <!--  card.// -->


        </section> <!-- content-main end// -->
        @include('seller.partials.footer')
    </main>

@endsection
