@extends('seller.layouts.base')

@section('content')

    @include('seller.partials.aside')
    <main class="main-wrap">
        @include('seller.partials.header')
        <section class="content-main">
            <div class="content-header">
                <div>
                    <h2 class="content-title card-title">Order List </h2>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                <div>
                    <input type="text" placeholder="Search order ID" class="form-control bg-white">
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
                                <option>Status</option>
                                <option>Active</option>
                                <option>Disabled</option>
                                <option>Show all</option>
                            </select>
                        </div>
                        <div class="col-lg-2 col-6 col-md-3">
                            <select class="form-select">
                                <option>Show 20</option>
                                <option>Show 30</option>
                                <option>Show 40</option>
                            </select>
                        </div>
                    </div>
                </header> <!-- card-header end// -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Date</th>
                                    <th scope="col" class="text-end"> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>0901</td>
                                    <td><b>Marvin McKinney</b></td>
                                    <td><template class="__cf_email__" data-cfemail="14797566627d7a54716c75796478713a777b79">[email&#160;protected]</template></td>
                                    <td>$9.00</td>
                                    <td><span class="badge rounded-pill alert-warning">Pending</span></td>
                                    <td>03.12.2020</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-md rounded font-sm">Detail</a>
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
                                <tr>
                                    <td>2323</td>
                                    <td><b>Leslie Alexander</b></td>
                                    <td><template class="__cf_email__" data-cfemail="b6dad3c5dadfd3f6d3ced7dbc6dad398d5d9db">[email&#160;protected]</template></td>
                                    <td>$46.61</td>
                                    <td><span class="badge rounded-pill alert-warning">Pending</span></td>
                                    <td>21.02.2020</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-md rounded font-sm">Detail</a>
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
                                <tr>
                                    <td>1233</td>
                                    <td><b>Esther Howard</b></td>
                                    <td><template class="__cf_email__" data-cfemail="93f6e0e7fbf6e1d3f6ebf2fee3fff6bdf0fcfe">[email&#160;protected]</template></td>
                                    <td>$12.00</td>
                                    <td><span class="badge rounded-pill alert-danger">Canceled</span></td>
                                    <td>03.07.2020</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-md rounded font-sm">Detail</a>
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
                                <tr>
                                    <td>1233</td>
                                    <td><b>Esther Howard</b></td>
                                    <td><template class="__cf_email__" data-cfemail="523721263a372012372a333f223e377c313d3f">[email&#160;protected]</template></td>
                                    <td>$12.00</td>
                                    <td><span class="badge rounded-pill alert-danger">Canceled</span></td>
                                    <td>03.07.2020</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-md rounded font-sm">Detail</a>
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
                                <tr>
                                    <td>2323</td>
                                    <td><b>Jenny Wilson</b></td>
                                    <td><template class="__cf_email__" data-cfemail="a1cbc4cfcfd8e1c4d9c0ccd1cdc48fc2cecc">[email&#160;protected]</template></td>
                                    <td>$589.99</td>
                                    <td><span class="badge rounded-pill alert-success">Received</span></td>
                                    <td>22.05.2020</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-md rounded font-sm">Detail</a>
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
                                <tr>
                                    <td>2112</td>
                                    <td><b>Marvin McKinney</b></td>
                                    <td><template class="__cf_email__" data-cfemail="c7aaa6b5b1aea987a2bfa6aab7aba2e9a4a8aa">[email&#160;protected]</template></td>
                                    <td>$16.58</td>
                                    <td><span class="badge rounded-pill alert-success">Received</span></td>
                                    <td>23.04.2020</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-md rounded font-sm">Detail</a>
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
                                <tr>
                                    <td>7897</td>
                                    <td><b>Albert Flores</b></td>
                                    <td><template class="__cf_email__" data-cfemail="cbaaa7a9aeb9bf8baeb3aaa6bba7aee5a8a4a6">[email&#160;protected]</template></td>
                                    <td>$10.00</td>
                                    <td><span class="badge rounded-pill alert-success">Received</span></td>
                                    <td>13.03.2020</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-md rounded font-sm">Detail</a>
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
                                <tr>
                                    <td>2323</td>
                                    <td><b>Wade Warren</b></td>
                                    <td><template class="__cf_email__" data-cfemail="b6c1d7d2d3f6d3ced7dbc6dad398d5d9db">[email&#160;protected]</template></td>
                                    <td>$105.55</td>
                                    <td><span class="badge rounded-pill alert-success">Received</span></td>
                                    <td>23.09.2019</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-md rounded font-sm">Detail</a>
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
                                <tr>
                                    <td>2324</td>
                                    <td><b>Jane Cooper</b></td>
                                    <td><template class="__cf_email__" data-cfemail="b7ddd6d9d2f7d2cfd6dac7dbd299d4d8da">[email&#160;protected]</template></td>
                                    <td>$710.68</td>
                                    <td><span class="badge rounded-pill alert-success">Received</span></td>
                                    <td>28.04.2020</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-md rounded font-sm">Detail</a>
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
                                <tr>
                                    <td>2325</td>
                                    <td><b>Savannah Nguyen</b></td>
                                    <td><template class="__cf_email__" data-cfemail="fc8f9d8a9d92929d94bc99849d918c9099d29f9391">[email&#160;protected]</template></td>
                                    <td>$710.68</td>
                                    <td><span class="badge rounded-pill alert-success">Received</span></td>
                                    <td>23.03.2020</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-md rounded font-sm">Detail</a>
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
                                <tr>
                                    <td>2326</td>
                                    <td><b>Guy Hawkins</b></td>
                                    <td><template class="__cf_email__" data-cfemail="bfd8cac6ffdac7ded2cfd3da91dcd0d2">[email&#160;protected]</template></td>
                                    <td>$767.50</td>
                                    <td><span class="badge rounded-pill alert-success">Received</span></td>
                                    <td>28.04.2020</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-md rounded font-sm">Detail</a>
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
                                <tr>
                                    <td>2327</td>
                                    <td><b>Darrell Steward</b></td>
                                    <td><template class="__cf_email__" data-cfemail="1c787d6e6e79705c79647d716c7079327f7371">[email&#160;protected]</template></td>
                                    <td>$406.27</td>
                                    <td><span class="badge rounded-pill alert-success">Received</span></td>
                                    <td>14.07.2020</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-md rounded font-sm">Detail</a>
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
                                <tr>
                                    <td>2328</td>
                                    <td><b>Jane Cooper</b></td>
                                    <td><template class="__cf_email__" data-cfemail="afc5cec1caefcad7cec2dfc3ca81ccc0c2">[email&#160;protected]</template></td>
                                    <td>$601.13</td>
                                    <td><span class="badge rounded-pill alert-success">Received</span></td>
                                    <td>18.03.2020</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-md rounded font-sm">Detail</a>
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
                                <tr>
                                    <td>2329</td>
                                    <td><b>Darlene Robertson</b></td>
                                    <td><template class="__cf_email__" data-cfemail="432726312a262d2603263b222e332f266d202c2e">[email&#160;protected]</template></td>
                                    <td>$948.55</td>
                                    <td><span class="badge rounded-pill alert-success">Received</span></td>
                                    <td>03.07.2020</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-md rounded font-sm">Detail</a>
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
                            </tbody>
                        </table>
                    </div> <!-- table-responsive //end -->
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
        @include('seller.partials.footer')
    </main>

@endsection
