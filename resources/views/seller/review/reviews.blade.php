@extends('seller.layouts.base')

@section('content')

    @include('seller.partials.aside')
    <main class="main-wrap">
        @include('seller.partials.header')
        <section class="content-main">
            <div class="content-header">
                <div>
                    <h2 class="content-title card-title">Reviews</h2>
                </div>
                <div>
                    <a href="{{ route('seller.products.add') }}" class="btn btn-primary"><i class="material-icons md-star"></i> Merchant Reviews</a>
                </div>
            </div>
            <div class="card mb-4">
                <header class="card-header">
                    <h4 class="card-title">Property Reviews</h4>
                </header>
                <!-- card-header end// -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th>Product</th>
                                    <th>Name</th>
                                    <th>Rating</th>
                                    <th>Date</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>23</td>
                                    <td><b>A-Line Mini Dress in Blue</b></td>
                                    <td>Devon Lane</td>
                                    <td>
                                        <i class="material-icons md-star"></i><i class="material-icons md-star"></i><i class="material-icons md-star"></i>
                                    </td>
                                    <td>10.03.2020</td>
                                    <td class="text-end">
                                      <a href="" class="btn btn-sm font-sm rounded btn-brand">
                                          <i class="material-icons md-info"></i> Details
                                      </a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div> <!-- table-responsive//end -->
                </div>
                <!-- card-body end// -->
            </div>
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
