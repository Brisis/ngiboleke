@extends('admin.layouts.base')

@section('content')

    @include('admin.partials.aside')
    <main class="main-wrap">
        @include('admin.partials.header')
        <section class="content-main">
            <div class="content-header">
                <div>
                    <h2 class="content-title card-title"> {{ $category->name }} </h2>
                </div>
                <div>
                  <a href="#" class="btn btn-sm font-sm rounded btn-danger">
                      <i class="material-icons md-delete_forever"></i> Delete
                  </a>
                </div>
            </div>
            <div class="card">
                <header class="card-header d-flex justify-content-between">
                  <h4 class="card-title">Edit or delete a category</h4>
                  <div>
                      <a href="{{ route('admin.categories.add_collection', $category->id) }}" class="btn btn-primary"><i class="material-icons md-plus"></i> Add new</a>
                  </div>
                </header>
                <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <h3>Collections</h3>
                      </div>
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#ID</th>
                                            <th>Name</th>
                                            <th>Products</th>
                                            <th>Slug</th>
                                            <th>Date Created</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($collections as $collection)
                                        <tr>
                                            <td>{{ $collection->id }}</td>
                                            <td><b>{{ $collection->name }}</b></td>
                                            <td>5</td>
                                            <td>/{{ $collection->slug }}</td>
                                            <td>{{ $collection->created_at->diffForHumans() }}</td>
                                            <td class="text-end">
                                              <a href="" class="btn btn-sm font-sm rounded btn-brand">
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
