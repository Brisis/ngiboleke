@extends('admin.layouts.base')

@section('content')

    @include('admin.partials.aside')
    <main class="main-wrap">
        @include('admin.partials.header')
        <section class="content-main">
            <div class="content-header">
                <div>
                    <h2 class="content-title card-title">Verifications</h2>
                </div>
            </div>
            <div class="card mb-4">
              <header class="card-header">
                  <h4 class="card-title">Verifications from Merchants & Customers</h4>
              </header>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#Id</th>
                                    <th>Full Name</th>
                                    <th>Contact Email</th>
                                    <th>Purpose</th>
                                    <th>Date</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach($verifications as $verification)
                                <tr>
                                    <td>#NGV{{ $verification->id }}</td>
                                    <td>{{ $verification->user->fullname }}</td>
                                    <td>{{ $verification->email }}</td>
                                    <td>
                                        {{ $verification->purpose }}
                                    </td>
                                    <td>{{ $verification->created_at->diffForHumans() }}</td>
                                    <td class="text-end">
                                      <a href="{{ route('admin.verifications.verification', $verification->id) }}" class="btn btn-sm font-sm rounded btn-brand">
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
