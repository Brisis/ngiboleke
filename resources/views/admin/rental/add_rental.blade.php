@extends('admin.layouts.base')

@section('content')

    @include('admin.partials.aside')
    <main class="main-wrap">
        @include('admin.partials.header')
        <section class="content-main">
          <form action="{{ route('admin.rentals.add_rental') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-10">
                    <div class="content-header">
                        <h2 class="content-title">Add New Rental</h2>
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
                                <label for="name" class="form-label">Name</label>
                                <input type="text" placeholder="Type here" class="form-control" name="name" id="name">
                            </div>
                            <div class="mb-4">
                                <label for="period" class="form-label">Period</label>
                                <input type="text" placeholder="Type here" class="form-control" name="period" id="period">
                            </div>
                            <div class="mb-4">
                                <label for="price_per_day" class="form-label">Price /day</label>
                                <input type="number" placeholder="Type here" class="form-control" name="price_per_day" id="price_per_day">
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Description</label>
                                <textarea placeholder="Type here" class="form-control" name="description" rows="4"></textarea>
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
