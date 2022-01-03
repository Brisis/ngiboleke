@extends('seller.layouts.base')

@section('content')

    @include('seller.partials.aside')
    <main class="main-wrap">
        @include('seller.partials.header')
        <section class="content-main">
          <form action="{{ route('seller.products.add_discount', $product->id) }}" method="post">
            @csrf
            <div class="row">
                <div class="col-9">
                    <div class="content-header">
                        <h2 class="content-title">Add Discount /<span class="badge font-sm"><a href="{{ route('seller.products.edit', $product->id)}}">Back</a></span></h2>
                        <div>
                            <button type="submit" class="btn btn-md rounded font-sm hover-up">Save Changes</button>
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
                            <h4>{{ $product->name }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-4">
                                <label for="name" class="form-label">Discount Name</label>
                                <input type="text" placeholder="Type here" class="form-control" id="name" name="name">
                            </div>
                            <div class="mb-4">
                                <label for="discount_percent" class="form-label">Percentage</label>
                                <input type="number" min="0" step=".01" placeholder="Type here" class="form-control" id="discount_percent" name="discount_percent">
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
