@extends('seller.layouts.base')

  @section('content')

      @include('seller.partials.aside')
      <main class="main-wrap">
          @include('seller.partials.header')
          <section class="content-main">
            <form action="{{ route('seller.edit')}}" method="post">
              @csrf
              <div class="row">
                  <div class="content-header">
                      <a href="{{ route('seller.profile') }}"><i class="material-icons md-arrow_back"></i> Go back </a>
                  </div>
                  <div class="col-9">
                      <div class="content-header">
                          <h2 class="content-title">Edit Merchant</h2>
                          <div>
                              <button type="submit" class="btn btn-light rounded font-sm mr-5 text-body hover-up">Save Changes</button>
                          </div>
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
                  <div class="col-lg-9">
                      <div class="card mb-4">
                          <div class="card-header">
                            <h5 class="card-title">Merchant Information</h5>
                          </div>
                          <div class="card-body">
                              <div class="mb-4">
                                  <label for="name" class="form-label">Merchant Name</label>
                                  <input type="text" placeholder="Type here" class="form-control" id="name" name="name" value="{{ $merchant->name }}">
                              </div>
                              <div class="mb-4">
                                  <label for="username" class="form-label">Username</label>
                                  <input type="text" placeholder="Type here" class="form-control" id="username" name="username" value="{{ $merchant->username }}">
                              </div>
                              <div class="row">
                                  <div class="col-lg-6">
                                      <div class="mb-4">
                                          <label class="form-label">Country Code</label>
                                          <div class="row gx-2">
                                              <input placeholder="+0" type="text" class="form-control" name="country_code" value="{{ $merchant->country_code }}">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-6">
                                      <div class="mb-4">
                                          <label class="form-label">Phone Number</label>
                                          <input placeholder="phone number" type="text" class="form-control" name="phone" value="{{ $merchant->phone }}">
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
                      </div> <!-- card end// -->
                  </div>
              </div>
            </form>
          </section> <!-- content-main end// -->
          @include('seller.partials.footer')
      </main>

  @endsection
