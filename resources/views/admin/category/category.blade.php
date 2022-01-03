@extends('admin.layouts.base')

@section('content')

    @include('admin.partials.aside')
    <main class="main-wrap">
        @include('admin.partials.header')
        <section class="content-main">
            <div class="content-header">
                <div>
                    <h2 class="content-title card-title"> {{ $category->name }} </h2>
                    <p>Add, edit or delete a category</p>
                </div>
                <div>
                    <a class="btn btn-danger" href="#">Delete Category</a>
                </div>
            </div>
            <div class="card">
                <header class="card-header">
                    <div class="row gx-3">
                        <div class="col-lg-4 col-md-6 me-auto">
                            <input type="text" placeholder="Search..." class="form-control" />
                        </div>
                        <div class="col-lg-2 col-md-3 col-6">
                          <div>
                              <a href="{{ route('admin.categories.add_collection', $category->id) }}" class="btn btn-primary">Add New</a>
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
                                            <th>ID</th>
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
                            </div>
                        </div> <!-- .col// -->
                    </div> <!-- .row // -->
                </div> <!-- card body .// -->
            </div> <!-- card .// -->
        </section> <!-- content-main end// -->
        @include('admin.partials.footer')
        </main>

        @endsection
