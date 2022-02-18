@extends('seller.layouts.base')

@section('content')

    @include('seller.partials.aside')
    <main class="main-wrap">
        @include('seller.partials.header')
        <section class="content-main">
            <div class="content-header">
                <div>
                    <h2 class="content-title card-title">Products</h2>
                </div>
                <div>
                    <a href="{{ route('seller.products.add') }}" class="btn btn-primary"><i class="material-icons md-plus"></i> Add new</a>
                </div>
            </div>
            <div class="card mb-4">
                <header class="card-header">
                    <h4 class="card-title">My Properties</h4>
                </header> <!-- card-header end// -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Product Price</th>
                                    <th>Product Stock</th>
                                    <th>Product Status</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->name }}</td>
                                    <td>$@money($product->price)</td>
                                    <td>{{ $product->stock }}</td>
                                    <td>
                                      @if($product->is_draft)
                                        <span class="badge bg-warning">Draft</span>
                                      @else
                                        <span class="badge bg-success">Published</span>
                                      @endif
                                    </td>
                                    <td class="text-end">
                                      <a href="{{ route('seller.products.edit', $product->id) }}" class="btn btn-sm font-sm rounded btn-brand">
                                          <i class="material-icons md-info"></i> Details
                                      </a>
                                    </td>
                                </tr>
                              @endforeach
                            </tbody>
                        </table>
                    </div> <!-- table-responsive//end -->
                </div>
                <!-- card-body end// -->
              </div>
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
        @include('seller.partials.footer')
    </main>

@endsection
