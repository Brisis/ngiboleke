@extends('admin.layouts.base')

@section('content')

    @include('admin.partials.aside')
    <main class="main-wrap">
        @include('admin.partials.header')
        <section class="content-main">
            <div class="content-header">
                <a href="javascript:history.back()"><i class="material-icons md-arrow_back"></i> Go back </a>
            </div>
            <div class="card mb-4">
                <div class="card-header bg-primary" style="height:150px">
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl col-lg flex-grow-0" style="flex-basis:230px;">
                            <div class="img-thumbnail shadow w-100 bg-white position-relative text-center" style="height:190px; width:200px; margin-top:-120px;background-image: url({{ asset($merchant->merchant_cover) }}); background-size: cover;background-repeat:no-repeat;">
                              @if($merchant->merchant_logo)
                                <img src="{{ asset($merchant->merchant_logo) }}" class="center-xy img-fluid" alt="Logo Brand">
                              @else
                                <img src="{{ asset('static/img/ph.jpg') }}" class="center-xy img-fluid" alt="Logo Brand">
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
                    <hr class="my-4">
                    <div class="row g-4">
                        <div class="col-md-12 col-lg-4 col-xl-2">
                            <article class="box">
                                <p class="mb-0 text-muted">Total Orders:</p>
                                <h5 class="text-success">0</h5>
                                <p class="mb-0 text-muted">Revenue:</p>
                                <h5 class="text-success mb-0">$0.00</h5>
                            </article>
                        </div> <!--  col.// -->
                        <div class="col-sm-6 col-lg-4 col-xl-5">
                            <h6>Contacts</h6>
                            <p>
                                Manager: {{ $merchant->user->fullname }} <br>
                                Username: <a href="">@ {{ $merchant->username }}</a> <br>
                                Phone: {{ $merchant->country_code }} {{ $merchant->phone }}
                            </p>
                        </div> <!--  col.// -->
                        <div class="col-sm-6 col-lg-4 col-xl-5">
                            <h6>Address</h6>
                            <p>
                                Country: {{ $merchant->country }} <br>
                                City: {{ $merchant->city }} <br>
                                Address: {{ $merchant->address }}
                            </p>
                        </div> <!--  col.// -->
                    </div> <!--  row.// -->
                </div> <!--  card-body.// -->
            </div> <!--  card.// -->

            <div class="card mb-4">
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
                </div> <!--  card-body.// -->
            </div> <!--  card.// -->
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
