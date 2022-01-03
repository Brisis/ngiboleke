@extends('admin.layouts.base')

@section('content')

    @include('admin.partials.aside')
    <main class="main-wrap">
        @include('admin.partials.header')
        <section class="content-main">
          <form action="{{ route('admin.categories.add_category') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-10">
                    <div class="content-header">
                        <h2 class="content-title">Add New Category</h2>
                        <div>
                            <button type="submit" class="btn btn-light rounded font-sm mr-5 text-body hover-up">Publish</button>
                        </div>
                    </div>
                </div>
                @if(session()->has('message'))
                <div class="col-10">
                  <div class="card alert alert-success bg-success">
                    <div class="card-body">
                      <p class="text-white">{{ session()->get('message') }}</p>
                    </div>
                  </div>
                </div>
                @endif
                <div class="col-lg-10">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Complete Form</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-4">
                                <label for="name" class="form-label">Category Name</label>
                                <input type="text" placeholder="Type here" class="form-control" name="name" id="name" required>
                            </div>
                            <div class="mb-4">
                                <label for="icon" class="form-label">Icon</label>
                                <input type="text" placeholder="Type here" class="form-control" name="icon" id="icon" required>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Picture</label>
                                <input class="form-control" type="file" name="picture" accept="image/*" required>
                            </div>
                        </div>
                    </div> <!-- card end// -->
                </div>
            </div>
          </form>
        </section> <!-- content-main end// -->
        @include('admin.partials.footer')
    </main>

@endsection
