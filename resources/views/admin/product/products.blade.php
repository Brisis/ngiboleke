@extends('admin.layouts.base')

@section('content')

    @include('admin.partials.aside')
    <main class="main-wrap">
        @include('admin.partials.header')
        <section class="content-main">
            <div class="content-header">
                <div>
                    <h2 class="content-title card-title">Active Products</h2>
                    <p>Ngiboleke Products</p>
                </div>
                <div>
                    <a href="{{ route('admin.products.drafts') }}" class="btn btn-primary btn-sm rounded">Drafted Products</a>
                </div>
            </div>
            <div class="card mb-4">
                <header class="card-header">
                    <div class="row gx-3">
                        <div class="col-lg-4 col-md-6 me-auto">
                            <input type="text" placeholder="Search..." class="form-control">
                        </div>
                        <div class="col-lg-2 col-6 col-md-3">
                            <select class="form-select">
                                <option>All category</option>
                                <option>Electronics</option>
                                <option>Clothings</option>
                                <option>Something else</option>
                            </select>
                        </div>
                        <div class="col-lg-2 col-6 col-md-3">
                            <select class="form-select">
                                <option>Latest added</option>
                                <option>Cheap first</option>
                                <option>Most viewed</option>
                            </select>
                        </div>
                    </div>
                </header> <!-- card-header end// -->
                <div class="card-body">
                    <div class="row gx-3 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 row-cols-xxl-5">

                        @foreach($products as $product)
                        <div class="col">
                            <div class="card card-product-grid">
                                <a href="{{ route('admin.products.product', $product->id) }}" class="img-wrap">
                                  <img src="{{ asset($product->image) }}" alt="Product">
                                </a>
                                <div class="info-wrap">
                                    <a href="{{ route('admin.products.product', $product->id) }}" class="title text-truncate">{{ $product->name }}</a>
                                    <div class="price mb-2">${{ $product->price }}</div> <!-- price.// -->
                                    <a href="{{ route('admin.products.product', $product->id) }}" class="btn btn-sm font-sm rounded btn-brand">
                                        <i class="material-icons md-info"></i> Details
                                    </a>
                                    <a href="{{ route('product', $product->slug) }}" target="_blank" class="btn btn-sm font-sm btn-light rounded">
                                        <i class="material-icons md-launch"></i> View Live
                                    </a>
                                </div>
                            </div> <!-- card-product  end// -->
                        </div> <!-- col.// -->
                        @endforeach
                    </div> <!-- row.// -->
                </div> <!-- card-body end// -->
            </div> <!-- card end// -->
            <div class="pagination-area mt-30 mb-50">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-start">
                        <li class="page-item active"><a class="page-link" href="#">01</a></li>
                        <li class="page-item"><a class="page-link" href="#">02</a></li>
                        <li class="page-item"><a class="page-link" href="#">03</a></li>
                        <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">16</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="material-icons md-chevron_right"></i></a></li>
                    </ul>
                </nav>
            </div>
        </section> <!-- content-main end// -->
        @include('admin.partials.footer')
    </main>

@endsection
