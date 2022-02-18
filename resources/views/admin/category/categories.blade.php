@extends('admin.layouts.base')

@section('content')

    @include('admin.partials.aside')
    <main class="main-wrap">
        @include('admin.partials.header')
        <section class="content-main">
            <div class="content-header">
                <div>
                    <h2 class="content-title card-title">Categories </h2>
                </div>
            </div>
            <div class="card">
                <header class="card-header d-flex justify-content-between">
                  <h4 class="card-title">Property Categories</h4>
                  <div>
                      <a href="{{ route('admin.categories.add_category') }}" class="btn btn-primary"><i class="material-icons md-plus"></i> Create new</a>
                  </div>
                </header>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#ID</th>
                                            <th>Name</th>
                                            <th>Collections</th>
                                            <th>Slug</th>
                                            <th>Icon</th>
                                            <th>Date Created</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($categories as $category)
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td><b>{{ $category->name }}</b></td>
                                            <td>{{ count($category->collections) }}</td>
                                            <td>/{{ $category->slug }}</td>
                                            <td>-{{ $category->icon }}</td>
                                            <td>{{ $category->created_at->diffForHumans() }}</td>
                                            <td class="text-end">
                                              <a href="{{ route('admin.categories.category', $category->id) }}" class="btn btn-sm font-sm rounded btn-brand">
                                                  <i class="material-icons md-info"></i> Details
                                              </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- .col// -->
                    </div> <!-- .row // -->
                </div> <!-- card body .// -->
            </div> <!-- card .// -->
        </section> <!-- content-main end// -->
        @include('admin.partials.footer')
        </main>

        @endsection
