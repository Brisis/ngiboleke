@extends('admin.layouts.base')

@section('content')

    @include('admin.partials.aside')
    <main class="main-wrap">
        @include('admin.partials.header')
        <section class="content-main">
            <div class="content-header">
                <div>
                    <h2 class="content-title card-title">Users</h2>
                </div>
            </div>
            <div class="card mb-4">
              <header class="card-header">
                  <h4 class="card-title">Registered Users</h4>
              </header>
              <!-- card-header end// -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Location</th>
                                    <th>Date Joined</th>
                                    <th>Admin Rights</th>
                                    <th class="text-end">Merchant Ownership</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->fullname }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                      @if($user->addresses)
                                        {{ $user->addresses->city }}
                                      @else
                                        N/A
                                      @endif
                                    </td>
                                    <td>{{ $user->created_at->diffForHumans()}}</td>
                                    <td>@if($user->is_admin) Is Admin @else Not Given @endif</td>
                                    <td class="text-end">
                                      @if($user->merchant)
                                        <span class="badge rounded-pill alert-success">Verified Merchant</span>
                                      @else
                                        <span class="badge rounded-pill alert-warning">Regular Customer</span>
                                      @endif
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
