@extends('admin.layouts.base')

@section('content')

    @include('admin.partials.aside')
    <main class="main-wrap">
        @include('admin.partials.header')
        <section class="content-main">
            <div class="content-header">
                <h2 class="content-title">Sellers cards</h2>
                <div>
                    <a href="#" class="btn btn-primary"><i class="material-icons md-plus"></i> Create new</a>
                </div>
            </div>
            <div class="card mb-4">
                <header class="card-header">
                    <div class="row gx-3">
                        <div class="col-lg-4 col-md-6 me-auto">
                            <input type="text" placeholder="Search..." class="form-control">
                        </div>
                        <div class="col-lg-2 col-6 col-md-3">
                            <select class="form-select">
                                <option>Show 20</option>
                                <option>Show 30</option>
                                <option>Show 40</option>
                                <option>Show all</option>
                            </select>
                        </div>
                        <div class="col-lg-2 col-6 col-md-3">
                            <select class="form-select">
                                <option>Status: all</option>
                                <option>Active only</option>
                                <option>Disabled</option>
                            </select>
                        </div>
                    </div>
                </header> <!-- card-header end// -->
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4">
                        <div class="col">
                            <div class="card card-user">
                                <div class="card-header">
                                    <img class="img-md img-avatar" src="assets/imgs/people/avatar1.jpg" alt="User pic">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mt-50">Mary Sandra</h5>
                                    <div class="card-text text-muted">
                                        <p class="m-0">Seller ID: #409</p>
                                        <p><template class="__cf_email__" data-cfemail="264b47545f1f1666435e474b564a430845494b">[email&#160;protected]</template></p>
                                        <a href="#" class="btn btn-sm btn-brand rounded font-sm mt-15">View details</a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- col.// -->
                        <div class="col">
                            <div class="card card-user">
                                <div class="card-header">
                                    <img class="img-md img-avatar" src="assets/imgs/people/avatar2.jpg" alt="User pic">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mt-50">Leslie Alexander</h5>
                                    <div class="card-text text-muted">
                                        <p class="m-0">Seller ID: #478</p>
                                        <p><template class="__cf_email__" data-cfemail="600c05130c0905200518010d100c054e030f0d">[email&#160;protected]</template></p>
                                        <a href="#" class="btn btn-sm btn-brand rounded font-sm mt-15">View details</a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- col.// -->
                        <div class="col">
                            <div class="card card-user">
                                <div class="card-header">
                                    <img class="img-md img-avatar" src="assets/imgs/people/avatar3.jpg" alt="User pic">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mt-50">Leslie Alexander</h5>
                                    <div class="card-text text-muted">
                                        <p class="m-0">Seller ID: #478</p>
                                        <p><template class="__cf_email__" data-cfemail="3f535a4c53565a7f5a475e524f535a115c5052">[email&#160;protected]</template></p>
                                        <a href="#" class="btn btn-sm btn-brand rounded font-sm mt-15">View details</a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- col.// -->
                        <div class="col">
                            <div class="card card-user">
                                <div class="card-header">
                                    <img class="img-md img-avatar" src="assets/imgs/people/avatar4.jpg" alt="User pic">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mt-50">Floyd Miles</h5>
                                    <div class="card-text text-muted">
                                        <p class="m-0">Seller ID: #171</p>
                                        <p><template class="__cf_email__" data-cfemail="99fffcfdf6eba8abd9fce1f8f4e9f5fcb7faf6f4">[email&#160;protected]</template></p>
                                        <a href="#" class="btn btn-sm btn-brand rounded font-sm mt-15">View details</a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- col.// -->
                        <div class="col">
                            <div class="card card-user">
                                <div class="card-header">
                                    <img class="img-md img-avatar" src="assets/imgs/people/avatar1.jpg" alt="User pic">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mt-50">John Alexander</h5>
                                    <div class="card-text text-muted">
                                        <p class="m-0">Seller ID: #987</p>
                                        <p><template class="__cf_email__" data-cfemail="ec86838482ac8195818d8580c28f8381">[email&#160;protected]</template></p>
                                        <a href="#" class="btn btn-sm btn-brand rounded font-sm mt-15">View details</a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- col.// -->
                        <div class="col">
                            <div class="card card-user">
                                <div class="card-header">
                                    <img class="img-md img-avatar" src="assets/imgs/people/avatar3.jpg" alt="User pic">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mt-50">Albert Flores</h5>
                                    <div class="card-text text-muted">
                                        <p class="m-0">Seller ID: #478</p>
                                        <p><template class="__cf_email__" data-cfemail="afc3cadcc3c6caefcad7cec2dfc3ca81ccc0c2">[email&#160;protected]</template></p>
                                        <a href="#" class="btn btn-sm btn-brand rounded font-sm mt-15">View details</a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- col.// -->
                        <div class="col">
                            <div class="card card-user">
                                <div class="card-header">
                                    <img class="img-md img-avatar" src="assets/imgs/people/avatar4.jpg" alt="User pic">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mt-50">Leslie Alexander</h5>
                                    <div class="card-text text-muted">
                                        <p class="m-0">Seller ID: #478</p>
                                        <p><template class="__cf_email__" data-cfemail="731f16001f1a1633160b121e031f165d101c1e">[email&#160;protected]</template></p>
                                        <a href="#" class="btn btn-sm btn-brand rounded font-sm mt-15">View details</a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- col.// -->
                        <div class="col">
                            <div class="card card-user">
                                <div class="card-header">
                                    <img class="img-md img-avatar" src="assets/imgs/people/avatar1.jpg" alt="User pic">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title mt-50">Marx Alberto</h5>
                                    <div class="card-text text-muted">
                                        <p class="m-0">Seller ID: #478</p>
                                        <p><template class="__cf_email__" data-cfemail="0f636a7c63666a4f6a776e627f636a216c6062">[email&#160;protected]</template></p>
                                        <a href="#" class="btn btn-sm btn-brand rounded font-sm mt-15">View details</a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- col.// -->
                    </div> <!-- row.// -->
                </div> <!-- card-body end// -->
            </div> <!-- card end// -->
            <div class="pagination-area mt-15 mb-50">
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
