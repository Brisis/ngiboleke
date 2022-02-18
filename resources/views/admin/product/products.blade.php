@extends('admin.layouts.base')

@section('content')

    @include('admin.partials.aside')
    <main class="main-wrap">
        @include('admin.partials.header')
        <section class="content-main">
            <div class="content-header">
                <div>
                    <h2 class="content-title card-title">Active Products</h2>
                </div>
                <div>
                    <a href="{{ route('admin.products.drafts') }}" class="btn btn-primary btn-sm rounded">Drafted Products</a>
                </div>
            </div>
            <div class="card mb-4">
                <header class="card-header">
                  <h4 class="card-title">Ngiboleke Products</h4>
                </header> <!-- card-header end// -->
                <div class="card-body">
                  <div class="table-responsive">
                      <table class="table table-hover">
                          <thead>
                              <tr>
                                  <th>#ID</th>
                                  <th scope="col">Name</th>
                                  <th scope="col">Price</th>
                                  <th scope="col">Stock</th>
                                  <th scope="col">Status</th>
                                  <th scope="col">Date Created</th>
                                  <th scope="col" class="text-end"> Action </th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach($products as $product)
                              <tr>
                                  <td>{{ $product->id }}</td>
                                  <td><b>{{ $product->name }}</b></td>
                                  <td>${{ $product->price }}</td>
                                  <td>{{ $product->stock }}</td>
                                  <td>
                                    @if($product->is_draft)
                                      <span class="badge rounded-pill alert-warning">Drafted</span>
                                    @else
                                      <span class="badge rounded-pill alert-success">Published</span>
                                    @endif
                                  </td>
                                  <td>{{ $product->created_at->diffForHumans() }}</td>
                                  <td class="text-end">
                                      <a href="{{ route('admin.products.product', $product->id) }}" class="btn btn-sm font-sm rounded btn-brand">
                                          <i class="material-icons md-info"></i> Details
                                      </a>
                                      <a href="{{ route('product', $product->slug) }}" target="_blank" class="btn btn-sm font-sm btn-light rounded">
                                          <i class="material-icons md-launch"></i> View Live
                                      </a>
                                  </td>
                              </tr>
                              @endforeach
                          </tbody>
                      </table>
                  </div> <!-- table-responsive //end -->

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
