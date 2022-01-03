@extends('admin.layouts.base')

@section('content')

    @include('admin.partials.aside')
    <main class="main-wrap">
        @include('admin.partials.header')
        <section class="content-main">
          <form action="{{ route('admin.add_location') }}" method="post">
            <div class="row">
                <div class="col-10">
                    <div class="content-header">
                        <h2 class="content-title">Add New Location</h2>
                        <div>
                            <button type="submit" class="btn btn-light rounded font-sm mr-5 text-body hover-up">Publish</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Complete Form</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-4">
                                <label for="product_name" class="form-label">Product title</label>
                                <input type="text" placeholder="Type here" class="form-control" id="product_name">
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Full description</label>
                                <textarea placeholder="Type here" class="form-control" rows="4"></textarea>
                            </div>
                            <div class="mb-4 input-upload">
                                <img src="assets/imgs/theme/upload.svg" alt="">
                                <input class="form-control" type="file">
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
