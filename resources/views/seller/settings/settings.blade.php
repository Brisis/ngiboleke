@extends('seller.layouts.base')

@section('content')

    @include('seller.partials.aside')
    <main class="main-wrap">
        @include('seller.partials.header')
        <section class="content-main">
            <div class="content-header">
                <h2 class="content-title">Profile setting </h2>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row gx-5">
                        <aside class="col-lg-3 border-end">
                            <nav class="nav nav-pills flex-lg-column mb-4">
                                <a class="nav-link active" aria-current="page" href="#">General</a>
                                <a class="nav-link" href="#">Moderators</a>
                                <a class="nav-link" href="#">Admin account</a>
                                <a class="nav-link" href="#">SEO settings</a>
                                <a class="nav-link" href="#">Mail settings</a>
                                <a class="nav-link" href="#">Newsletter</a>
                            </nav>
                        </aside>
                        <div class="col-lg-9">
                            <section class="content-body p-xl-4">
                                <div class="row" style="max-width:920px">
                                    <div class="col-md">
                                        <article class="box mb-3 bg-light">
                                            <a class="btn float-end btn-light btn-sm rounded font-md" href="#">Change</a>
                                            <h6>Password</h6>
                                            <small class="text-muted d-block" style="width:70%">You can reset or change your password by clicking here</small>
                                        </article>
                                    </div> <!-- col.// -->
                                    <div class="col-md">
                                        <article class="box mb-3 bg-light">
                                            <a class="btn float-end btn-light rounded btn-sm font-md" href="#">Deactivate</a>
                                            <h6>Remove account</h6>
                                            <small class="text-muted d-block" style="width:70%">Once you delete your account, there is no going back.</small>
                                        </article>
                                    </div> <!-- col.// -->
                                </div> <!-- row.// -->
                            </section> <!-- content-body .// -->
                        </div> <!-- col.// -->
                    </div> <!-- row.// -->
                </div> <!-- card body end// -->
            </div> <!-- card end// -->
        </section> <!-- content-main end// -->
        @include('seller.partials.footer')
    </main>

  @endsection
