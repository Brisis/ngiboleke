@extends('admin.layouts.base')

@section('content')

    @include('admin.partials.aside')
    <main class="main-wrap">
        @include('admin.partials.header')
        <section class="content-main">
            <div class="content-header">
                <h2 class="content-title">Sellers</h2>
            </div>
            <div class="card mb-4">
              <header class="card-header">
                  <h4 class="card-title">Ngiboleke Merchants</h4>
              </header> <!-- card-header end// -->
                <div class="card-body">
                  <div class="table-responsive">
                      <table class="table table-hover">
                          <thead>
                              <tr>
                                  <th>Merchant ID:</th>
                                  <th scope="col">Name</th>
                                  <th scope="col">Inventory</th>
                                  <th scope="col">Active Status</th>
                                  <th scope="col">Date Joined</th>
                                  <th scope="col" class="text-end"> Action </th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach($merchants as $merchant)
                              <tr>
                                  <td>#{{ $merchant->id }}</td>
                                  <td><b>{{ $merchant->name }}</b></td>
                                  <td>{{ count($merchant->products) }}</td>
                                  <td>
                                    @if($merchant->is_active)
                                      <span class="badge rounded-pill alert-success">Actiated</span>
                                    @else
                                      <span class="badge rounded-pill alert-warning">De-Actiated</span>
                                    @endif
                                  </td>
                                  <td>{{ $merchant->created_at->diffForHumans() }}</td>
                                  <td class="text-end">
                                    <a href="{{ route('admin.sellers.seller', $merchant) }}" class="btn btn-sm font-sm rounded btn-brand">
                                        <i class="material-icons md-info"></i> Details
                                    </a>
                                    <a href="{{ route('merchants.merchant', $merchant->username) }}" target="_blank" class="btn btn-sm font-sm btn-light rounded">
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
            <div class="pagination-area mt-15 mb-50">
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
