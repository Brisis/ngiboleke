@extends('admin.layouts.base')

@section('content')

    @include('admin.partials.aside')
    <main class="main-wrap">
        @include('admin.partials.header')
        <section class="content-main">
          <form action="{{ route('admin.locations.add_location') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-10">
                    <div class="content-header">
                        <h2 class="content-title">Add New Location</h2>
                        <div>
                            <button type="submit" class="btn btn-light rounded font-sm mr-5 text-body hover-up">Publish</button>
                        </div>
                    </div>
                </div>
                @if(session()->has('message'))
                <div class="col-10">
                  <div class="card alert alert-success bg-success">
                    <div class="card-body">
                      <p class="text-white">{{ session()->get('message') }}</p>
                    </div>
                  </div>
                </div>
                @endif
                <div class="col-lg-10">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Complete Form</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-4">
                                <label for="product_name" class="form-label">Country</label>
                                @include('admin.partials.countries')
                            </div>
                            <div class="mb-4">
                                <label for="location_state" class="form-label">State</label>
                                <input type="text" placeholder="Type here" class="form-control" name="location_state" id="location_state">
                            </div>
                            <div class="mb-4">
                                <label for="city" class="form-label">City</label>
                                <input type="text" placeholder="Type here" class="form-control" name="city" id="city">
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Street Address</label>
                                <textarea placeholder="Type here" class="form-control" name="street" rows="4"></textarea>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Map Iframe</label>
                                <textarea placeholder="Paste Google Iframe here" class="form-control" name="map" rows="4"></textarea>
                            </div>
                        </div>
                    </div> <!-- card end// -->
                </div>
            </div>
          </form>
        </section> <!-- content-main end// -->
        @include('admin.partials.footer')
    </main>

@endsection
