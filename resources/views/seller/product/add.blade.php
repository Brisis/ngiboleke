@extends('seller.layouts.base')

@section('content')

    @include('seller.partials.aside')
    <main class="main-wrap">
        @include('seller.partials.header')
        <section class="content-main">
          <form action="{{ route('seller.products.add')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-9">
                    <div class="content-header">
                        <h2 class="content-title">Add New Product</h2>
                        <div>
                            <button type="submit" class="btn btn-light rounded font-sm mr-5 text-body hover-up">Save to Draft</button>
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
                            <h4>Fill Form</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-4">
                                <label for="product_name" class="form-label">Product Name</label>
                                <input type="text" placeholder="Type here" class="form-control" id="product_name" name="name">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label class="form-label">Product Price</label>
                                        <div class="row gx-2">
                                            <input placeholder="$" type="text" class="form-control" name="price">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label class="form-label">Discount %</label>
                                        <input placeholder="%" type="text" class="form-control" name="discount_percent">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label class="form-label">Product Stock</label>
                                        <div class="row gx-2">
                                            <input placeholder="Qty" type="text" class="form-control" name="stock">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label class="form-label">SKU Code</label>
                                        <input placeholder="#" type="text" class="form-control" name="sku">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Category Collection</label>
                                <div class="custom_select">
                                    <select class="form-select select-nice" name="collection">
                                        <option>Select Option</option>
                                        @foreach($collections as $collection)
                                          <option value="{{$collection->id}}">{{$collection->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="video" class="form-label">Product Video</label>
                                <input type="text" placeholder="Paste Youtube Url" class="form-control" id="video" name="video">
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Full description</label>
                                <textarea placeholder="Type here" class="form-control" rows="4" name="description"></textarea>
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
