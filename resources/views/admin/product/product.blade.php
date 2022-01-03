@extends('admin.layouts.base')

@section('content')

    @include('admin.partials.aside')
    <main class="main-wrap">
        @include('admin.partials.header')
        <section class="content-main">
            <div class="row">
                <form action="" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="col-9">
                      <div class="content-header">
                          <h2 class="content-title">Product</h2>
                          <div>
                              <button class="btn btn-md rounded font-sm hover-up"><i class="material-icons md-delete_forever"></i> Delete</button>
                          </div>
                      </div>
                  </div>
                  @if(session()->has('message'))
                  <div class="col-9">
                    <div class="card alert alert-success bg-success">
                      <div class="card-body">
                        <p class="text-white">{{ session()->get('message') }}</p>
                      </div>
                    </div>
                  </div>
                  @endif

                  @if(session()->has('warning'))
                  <div class="col-9">
                    <div class="card alert alert-warning bg-warning">
                      <div class="card-body">
                        <p class="text-white">{{ session()->get('warning') }}</p>
                      </div>
                    </div>
                  </div>
                  @endif
                </form>

                <div class="col-9">
                  <div class="card mb-4">
                    <div class="card-header">
                        <h4>{{ $product->name }}</h4>
                    </div>
                  </div>
                </div>

                <div class="col-lg-9">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Primary Info</h4>
                        </div>
                        <div class="card-body">
                            <div class="mb-4">
                                <label for="product_name" class="form-label">Product Name</label>
                                <input type="text" placeholder="Type here" class="form-control" id="product_name" disabled value="{{ $product->name }}">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label class="form-label">Product Price</label>
                                        <div class="row gx-2">
                                            <input placeholder="$" type="text" class="form-control" disabled value="{{ $product->price }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label class="form-label">SKU Code</label>
                                        <input placeholder="#" type="text" class="form-control" disabled value="{{ $product->SKU }}">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Category Collection</label>
                                <input type="text" class="form-control" id="collection" disabled value="{{ $product->collection->name }}">
                            </div>
                            <div class="mb-4">
                                <label for="video" class="form-label">Product Video</label>
                                <input type="text" placeholder="Paste Youtube Url" class="form-control" id="video" disabled value="{{ $product->video }}">
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Full description</label>
                                <textarea placeholder="Type here" class="form-control" rows="4" disabled>{{ $product->description }}</textarea>
                            </div>
                        </div>
                    </div> <!-- card end// -->
                </div>
                <!-- Images -->
                <div class="col-lg-9">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Images</h4>
                        </div>
                        <div class="card-body">
                          <div class="row gx-3 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 row-cols-xxl-5 mb-3">
                            @foreach($images as $image)
                            <div class="col">
                              <div class="card card-product-grid">
                                  <a href="#" class="img-wrap">
                                    <img src="{{ asset($image->thumbnail) }}" alt="Product">
                                  </a>
                                  <div class="info-wrap">
                                      <a href="#" class="btn btn-sm font-sm btn-light rounded">
                                          <i class="material-icons md-delete_forever"></i> Delete
                                      </a>
                                  </div>
                              </div> <!-- card-product  end// -->
                            </div>
                            @endforeach
                          </div>
                        </div>
                    </div> <!-- card end// -->
                </div>
                <!-- -->
                <div class="col-lg-9">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Inventory</h4>
                        </div>
                        <div class="card-body">
                          @if($product->inventories)
                            <div class="mb-4">
                                <label for="product_name" class="form-label">Quantity</label>
                                <input type="text" placeholder="Type here" class="form-control" id="product_name" disabled value="{{ $product->inventories->stock }}">
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Status</label>
                                @if($product->inventories->active)
                                  <input type="text" class="form-control" id="collection" disabled value="Active">
                                @else
                                  <input type="text" class="form-control" id="collection" disabled value="In-Active">
                                @endif
                            </div>
                          @else
                            <p>Stock Details N/A</p>
                          @endif
                        </div>
                    </div> <!-- card end// -->
                </div>
                <!-- -->
                <div class="col-lg-9">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Discounts</h4>
                        </div>
                        <div class="card-body">
                          @if($product->discounts)
                            <div class="mb-4">
                                <label for="product_name" class="form-label">Discount Name</label>
                                <input type="text" placeholder="Type here" class="form-control" id="product_name" disabled value="{{ $product->discounts->name }}">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label class="form-label">Percentage</label>
                                        <div class="row gx-2">
                                            <input placeholder="$" type="text" class="form-control" disabled value="{{ $product->discounts->discount_percent }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label class="form-label">Status</label>
                                        @if($product->discounts->active)
                                          <input type="text" class="form-control" disabled value="Active">
                                        @else
                                          <input type="text" class="form-control" disabled value="In-Active">
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @else
                              <p>Stock Details N/A</p>
                            @endif
                        </div>
                    </div> <!-- card end// -->
                </div>
                <!-- -->
                <div class="col-lg-9">
                    <div class="card mb-4">

                        <header class="card-header">
                            <div class="row gx-3">
                              <div class="col-12 mb-4">
                                  <h4>Colors</h4>
                              </div>
                                <div class="col-lg-6 col-md-6 me-auto">
                                    <input type="text" placeholder="Search..." class="form-control">
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
                          @if($product->colors)
                          <div class="table-responsive">
                              <table class="table table-hover">
                                  <thead>
                                      <tr>
                                          <th scope="col">Color Name</th>
                                          <th scope="col">Color Code (HEX)</th>
                                          <th scope="col">Color</th>
                                          <th scope="col" class="text-end"> Action </th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($product->colors as $color)
                                      <tr>
                                          <td>{{ $color->name }}</td>
                                          <td>{{ $color->color }}</td>
                                          <td>
                                            <span class="badge rounded-pill" style="background: {{ $color->color }}">
                                              {{ $color->color }}
                                            </span>
                                          </td>
                                          <td class="text-end">
                                              <a href="#" class="btn btn-light rounded btn-sm font-sm">
                                                <i class="material-icons md-delete_forever"></i>
                                              </a>
                                          </td>
                                      </tr>
                                      @endforeach
                                  </tbody>
                              </table>
                          </div> <!-- table-responsive //end -->
                          @else
                            <p>Color Details N/A</p>
                          @endif
                        </div>
                    </div> <!-- card end// -->
                </div>
                <!-- -->
                <div class="col-lg-9">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between">
                            <h4>Promotion</h4>
                            <a class="btn btn-md rounded font-sm" href="">Add Feature</a>
                        </div>
                        <div class="card-body">
                          @if($product->promotions)
                            <div class="mb-4">
                                <label for="product_name" class="form-label">Promo Name</label>
                                <input type="text" placeholder="Type here" class="form-control" id="product_name" disabled value="{{ $product->promotions->name }}">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label class="form-label">Ending Date</label>
                                        <div class="row gx-2">
                                            <input placeholder="$" type="text" class="form-control" disabled value="{{ $product->promotions->date_end }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label class="form-label">Feature Status</label>
                                        @if($product->promotions->featured)
                                          <input type="text" class="form-control" disabled value="Active">
                                        @else
                                          <input type="text" class="form-control" disabled value="In-Active">
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @else
                              <p>Promotion Details N/A</p>
                            @endif
                        </div>
                    </div> <!-- card end// -->
                </div>
                <!-- -->
                <div class="col-lg-9">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Rental</h4>
                        </div>
                        <div class="card-body">
                          @if($product->rentals)
                            <div class="mb-4">
                                <label for="product_name" class="form-label">Rental</label>
                                <input type="text" placeholder="Type here" class="form-control" id="product_name" disabled value="{{ $product->rentals->name }}">
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Description</label>
                                <textarea placeholder="Type here" class="form-control" rows="4" disabled>{{ $product->rentals->description }}</textarea>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label class="form-label">Rental Period</label>
                                        <div class="row gx-2">
                                            <input placeholder="$" type="text" class="form-control" disabled value="{{ $product->rentals->period }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label class="form-label">Daily Price</label>
                                        <input placeholder="#" type="text" class="form-control" disabled value="{{ $product->rentals->price_per_day }}">
                                    </div>
                                </div>
                            </div>
                            @else
                              <p>Rental Details N/A</p>
                            @endif
                        </div>
                    </div> <!-- card end// -->
                </div>
                <!-- -->
                <div class="col-lg-9">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between">
                            <h4>Reviews</h4>
                            <a class="btn btn-md rounded font-sm" href="#">View Reviews</a>
                        </div>
                        <div class="card-body">
                            <p>Reviews N/A</p>
                        </div>
                    </div> <!-- card end// -->
                </div>
            </div>
        </section> <!-- content-main end// -->
        @include('admin.partials.footer')
    </main>

@endsection
