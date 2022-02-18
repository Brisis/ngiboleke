@extends('admin.layouts.base')

@section('content')

    @include('admin.partials.aside')
    <main class="main-wrap">
        @include('admin.partials.header')
        <section class="content-main">
            <div class="content-header">
                <div>
                    <h2 class="content-title card-title">Admin Dashboard </h2>
                    <p>Manage Everything on Ngiboleke</p>
                </div>
                <div>
                    <a href="#" class="btn btn-primary"><i class="text-muted material-icons md-post_add"></i>Create report</a>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="card card-body mb-4">
                        <article class="icontext">
                            <span class="icon icon-sm rounded-circle bg-primary-light"><i class="text-primary material-icons md-monetization_on"></i></span>
                            <div class="text">
                                <h6 class="mb-1 card-title">Revenue</h6>
                                <span>$0.00</span>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card card-body mb-4">
                        <article class="icontext">
                            <span class="icon icon-sm rounded-circle bg-success-light"><i class="text-success material-icons md-local_shipping"></i></span>
                            <div class="text">
                                <h6 class="mb-1 card-title">Orders</h6> <span>0</span>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card card-body mb-4">
                        <article class="icontext">
                            <span class="icon icon-sm rounded-circle bg-warning-light"><i class="text-warning material-icons md-qr_code"></i></span>
                            <div class="text">
                                <h6 class="mb-1 card-title">Products</h6> <span>0</span>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card card-body mb-4">
                        <article class="icontext">
                            <span class="icon icon-sm rounded-circle bg-info-light"><i class="text-info material-icons md-shopping_basket"></i></span>
                            <div class="text">
                                <h6 class="mb-1 card-title">Monthly Earning</h6> <span>$0.00</span>
                            </div>
                        </article>
                    </div>
                </div>
            </div>

            <div class="card mb-4">
                <header class="card-header">
                    <h4 class="card-title">Latest orders</h4>
                </header>
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="table-responsive">
                          <table class="table align-middle table-nowrap mb-0">
                              <thead class="table-light">
                                  <tr>
                                      <th class="align-middle" scope="col">Order ID</th>
                                      <th class="align-middle" scope="col">Billing Name</th>
                                      <th class="align-middle" scope="col">Date</th>
                                      <th class="align-middle" scope="col">Total</th>
                                      <th class="align-middle" scope="col">Payment Status</th>
                                      <th class="align-middle" scope="col">Payment Method</th>
                                      <th class="align-middle" scope="col">View Details</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>

                                      <td><a href="#" class="fw-bold">#NG2540</a> </td>
                                      <td>Neal Matthews</td>
                                      <td>
                                          07 Oct, 2021
                                      </td>
                                      <td>
                                          $400
                                      </td>
                                      <td>
                                          <span class="badge badge-pill badge-soft-success">Paid</span>
                                      </td>
                                      <td>
                                          <i class="material-icons md-payment font-xxl text-muted mr-5"></i> Mastercard
                                      </td>
                                      <td>
                                          <a href="#" class="btn btn-xs"> View details</a>
                                      </td>
                                  </tr>
                                  <tr>

                                      <td><a href="#" class="fw-bold">#SK2541</a> </td>
                                      <td>Jamal Burnett</td>
                                      <td>
                                          07 Oct, 2021
                                      </td>
                                      <td>
                                          $380
                                      </td>
                                      <td>
                                          <span class="badge badge-pill badge-soft-danger">Chargeback</span>
                                      </td>
                                      <td>
                                          <i class="material-icons md-payment font-xxl text-muted mr-5"></i> Visa
                                      </td>
                                      <td>
                                          <a href="#" class="btn btn-xs"> View details</a>
                                      </td>
                                  </tr>

                                  <tr>

                                      <td><a href="#" class="fw-bold">#SK2544</a> </td>
                                      <td>Ronald Taylor</td>
                                      <td>
                                          04 Oct, 2021
                                      </td>
                                      <td>
                                          $404
                                      </td>
                                      <td>
                                          <span class="badge badge-pill badge-soft-warning">Refund</span>
                                      </td>
                                      <td>
                                          <i class="material-icons md-payment font-xxl text-muted mr-5"></i> Visa
                                      </td>
                                      <td>
                                          <a href="#" class="btn btn-xs"> View details</a>
                                      </td>
                                  </tr>

                              </tbody>
                          </table>
                        </div>
                    </div> <!-- table-responsive end// -->
                </div>
            </div>
        </section> <!-- content-main end// -->

        @include('admin.partials.footer')
    </main>

@endsection
