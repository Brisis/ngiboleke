@extends('admin.layouts.base')

@section('content')

    @include('admin.partials.aside')
    <main class="main-wrap">
        @include('admin.partials.header')
        <section class="content-main">
            <div class="content-header">
                <div>
                    <h2 class="content-title card-title">Rentals</h2>
                    <p>Registered Rentals</p>
                </div>
                <div>
                    <input type="text" placeholder="Search by name" class="form-control bg-white">
                </div>
            </div>
            <div class="card mb-4">
                <header class="card-header">
                    <div class="row gx-3">
                        <div class="col-lg-4 col-md-6 me-auto">
                            <input type="text" placeholder="Search..." class="form-control" />
                        </div>
                        <div class="col-lg-2 col-md-3 col-6">
                          <div>
                              <a href="{{ route('admin.rentals.add_rental') }}" class="btn btn-primary">Add New</a>
                          </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-6">
                            <select class="form-select">
                                <option>Show 20</option>
                                <option>Show 30</option>
                                <option>Show 40</option>
                            </select>
                        </div>
                    </div>
                </header>
                <!-- card-header end// -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#Id</th>
                                    <th>Country</th>
                                    <th>State/Province</th>
                                    <th>City</th>
                                    <th>Street</th>
                                    <th>Date</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach($locations as $location)
                                <tr>
                                    <td>{{ $location->id }}</td>
                                    <td>{{ $location->country }}</td>
                                    <td>{{ $location->location_state }}</td>
                                    <td>{{ $location->city }}</td>
                                    <td>{{ $location->street }}</td>
                                    <td>{{ $location->created_at->diffForHumans()}}</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                        <div class="dropdown">
                                            <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">View detail</a>
                                                <a class="dropdown-item" href="#">Edit info</a>
                                                <a class="dropdown-item text-danger" href="#">Delete</a>
                                            </div>
                                        </div> <!-- dropdown //end -->
                                    </td>
                                </tr>
                              @endforeach
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
        @include('admin.partials.footer')
    </main>

@endsection
