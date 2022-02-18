@extends('admin.layouts.base')

@section('content')

    @include('admin.partials.aside')
    <main class="main-wrap">
        @include('admin.partials.header')
        <section class="content-main">
            <div class="content-header">
                <div>
                    <h2 class="content-title card-title">Admin Dashboard </h2>
                    <p>Manage Data on Ngiboleke</p>
                </div>
                <div>
                    <a href="#" class="btn btn-primary"><i class="text-muted material-icons md-post_add"></i>Create report</a>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card mb-4">
                        <article class="card-body">
                            <h5 class="card-title">Site statistics</h5>
                            <canvas id="myChart" height="120px"></canvas>
                        </article>
                    </div>
                </div>
            </div>
        </section> <!-- content-main end// -->

        @include('admin.partials.footer')
    </main>

@endsection
