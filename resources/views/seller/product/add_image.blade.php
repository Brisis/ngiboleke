@extends('seller.layouts.base')

@section('content')

    @include('seller.partials.aside')
    <main class="main-wrap">
        @include('seller.partials.header')
        <section class="content-main">
          <div class="content-header">
              <a href="{{ route('seller.products.edit', $product->id)}}"><i class="material-icons md-arrow_back"></i> Go back </a>
          </div>
          <form action="{{ route('seller.products.add_image', $product->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-9">
                    <div class="content-header">
                        <h2 class="content-title">Add Images</h2>
                        <div>
                            <button type="submit" class="btn btn-md rounded font-sm hover-up">Add Image</button>
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
                          <div class="row gx-3 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 row-cols-xxl-5 mb-3">
                            @foreach($images as $image)
                            <div class="col">
                              <div class="card card-product-grid">
                                  <a href="#" class="img-wrap">
                                    <img src="{{ asset($image->thumbnail) }}" alt="Product">
                                  </a>
                                  <div class="info-wrap">
                                      <a href="#" class="btn btn-sm font-sm btn-light rounded">
                                          <i class="material-icons md-delete_forever"></i> Delete
                                      </a>
                                  </div>
                              </div> <!-- card-product  end// -->
                            </div>
                            @endforeach
                          </div>
                          <div class="mb-4">
                              <label class="form-label">Picture</label>
                              <input class="form-control" type="file" name="image_path" accept="image/*" required>
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
