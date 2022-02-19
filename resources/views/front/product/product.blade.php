@extends('front.layouts.app')

@section('content')

@include('front.partials.topbar')

<!-- Modal -->
<div class="modal fade" id="addedToCart" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Shopping Cart</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Property added to cart!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Continue Shopping</button>
        <a type="button" href="{{ route('cart') }}" class="btn btn-primary"><i class="lni lni-cart"></i> Visit Cart</a>
      </div>
    </div>
  </div>
</div>

<div class="page-content-wrapper" id="app">
  <div class="product-slide-wrapper">
    <!-- Product Slides-->
    <div class="product-slides owl-carousel">
      @foreach($images as $image)
      <!-- Single Hero Slide-->
      <div class="single-product-slide" style="background-image: url({{ asset($image->image_path) }}); background-size: contain;background-repeat:no-repeat">
      </div>
      @endforeach
    </div>
    <!--<a class="review-image mt-2 border rounded" href="{{ asset('static/img/product/3.png') }}">
      <img class="rounded-3" src="{{ asset('static/img/product/3.png') }}" alt="">
    </a>-->
    <!-- Video Button-->
    @if($product->video)
    <a class="video-btn shadow-sm" id="singleProductVideoBtn" href="{{ $product->video }}">
      <svg class="bi bi-play text-dark" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
        <path d="M10.804 8 5 4.633v6.734L10.804 8zm.792-.696a.802.802 0 0 1 0 1.392l-6.363 3.692C4.713 12.69 4 12.345 4 11.692V4.308c0-.653.713-.998 1.233-.696l6.363 3.692z"></path>
      </svg>
    </a>
    @endif
  </div>
  <div class="product-description pb-3">
    <!-- Product Title & Meta Data-->
    <div class="product-title-meta-data bg-white mb-3 py-3">
      <div class="container d-flex justify-content-between">
        <div class="p-title-price">
          <h6 class="mb-1">{{ $product->name }}</h6>
          <p class="sale-price mb-0">
            $@money($product->price)
            @if($product->discount_percent)
            <span>$@money($product->price + (($product->price * $product->discount_percent) / 100) )</span>
            @endif
          </p>
        </div>
        @if($product->stock == 1)
          <div>
            <button class="btn btn-danger" title="Property Out of Stock"><i class="lni lni-cart"></i> Out of Stock</buttom>
          </div>
        @else
          <div>
            <a href="javascript:void()" data-bs-toggle="modal" data-bs-target="#addedToCart"  onclick="event.preventDefault();" v-on:click="addToCart('{{ $product->id }}')" class="btn btn-success showAddToCart" title="Add To Cart"><i class="lni lni-cart"></i> Add to cart</a>
          </div>
        @endif
      </div>
      <!-- Ratings-->
      @if($product->reviews)
      <div class="product-ratings">
        <div class="container d-flex align-items-center justify-content-between">
          <div class="ratings">
            @for ($i = 0; $i < number_format($product->reviews()->avg('rating'), 0); $i++)
             <i class="lni lni-star-filled"></i>
            @endfor
            <span class="ps-1">{{ count($product->reviews) }} ratings</span>
          </div>
          <div class="total-result-of-ratings">
            <span>{{ number_format($product->reviews()->avg('rating'), 2) }}</span>
            <span></span>
            <!-- <span>Very Good</span> -->
          </div>
        </div>
      </div>
      @endif
    </div>

    <!-- Flash Sale Panel-->
    <!-- <div class="flash-sale-panel bg-white mb-3 py-3">
      <div class="container">
        <!-- Sales Offer Content--
        <div class="sales-offer-content d-flex align-items-end justify-content-between">
          <!-- Sales End--
          <div class="sales-end">
            @if($product->promotions)
            <p class="mb-1 font-weight-bold"><i class="lni lni-bolt"></i> Flash sale end in</p>

            <!-- Please use event time this format: YYYY/MM/DD hh:mm:ss--
            <ul class="sales-end-timer ps-0 d-flex align-items-center" data-countdown="{{ $product->promotions->date_end }} 00:00:00">
              <li><span class="days">0</span>d</li>
              <li><span class="hours">0</span>h</li>
              <li><span class="minutes">0</span>m</li>
              <li><span class="seconds">0</span>s</li>
            </ul>
            @else
              <p>No promotions.</p>
            @endif
          </div>
          <!-- Sales Volume--
          <div class="sales-volume text-end">
            <p class="mb-1 font-weight-bold">82% Sold Out</p>
            <div class="progress" style="height: 6px;">
              <div class="progress-bar bg-warning" role="progressbar" style="width: 82%;" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <!-- Selection Panel-->
    <div class="selection-panel bg-white mb-3 py-3">
      <div class="container d-flex align-items-center justify-content-between">
        <!-- Choose Color-->
        <div class="choose-color-wrapper">
          <p class="mb-1 font-weight-bold">Colors</p>
          <div class="choose-color-radio d-flex align-items-center">
            @if($product->colors)
              @foreach($product->colors as $color)
                <!-- Single Radio Input-->
                <div class="form-check mb-0 mx-2">
                  <input class="form-check-input ml-3" id="{{ $color->id }}" type="radio" name="{{ $color->color }}" style="background: {{ $color->color }}">
                  <label class="form-check-label" style="font-size:12px;" for="{{ $color->name }}">{{ $color->name }}</label>
                </div>
              @endforeach
            @else
              <p>Color Details N/A</p>
            @endif
          </div>
        </div>
      </div>
    </div>
    <!-- Add To Cart-->
    <!-- <div class="cart-form-wrapper bg-white mb-3 py-3">
      <div class="container">
        <form class="cart-form" action="" method="">
          <div class="order-plus-minus d-flex align-items-center">
            <div class="quantity-button-handler">-</div>
            <input class="form-control cart-quantity-input quantity" type="number" step="1" name="quantity">
            <div class="quantity-button-handler">+</div>
          </div>
          <button class="btn btn-danger ms-3" type="submit">Add To Cart</button>
        </form>
      </div>
    </div> -->

    @if($product->video)
    <!-- Product Specification-->
    <div class="p-specification bg-white mb-3 py-3">
      <div class="container">
        <h6>Specifications</h6>
        <div class="">
          {{ $product->description }}
        </div>
      </div>
    </div>
    @endif

    @if($product->video)
    <!-- Product Video -->
    <div class="bg-img" style="background-image: url({{ asset('static/img/interior.jpg') }})">
      <div class="container">
        <div class="video-cta-content d-flex align-items-center justify-content-center">
          <div class="video-text text-center">
            <h4 class="mb-4">{{ $product->name }}</h4><a class="btn btn-primary rounded-circle" id="videoButton" href="{{ $product->video }}"><i class="lni lni-play"></i></a>
          </div>
        </div>
      </div>
    </div>
    @endif
    <div class="pb-3"></div>

    @if($related->isNotEmpty())
    <!-- Related Products Slides-->
    <div class="related-product-wrapper py-3 mb-3">
      <div class="container">
        <div class="section-heading d-flex align-items-center justify-content-between">
          <h6>Related Products</h6><a class="btn" href="{{ route('collection', $product->collection->slug) }}">View All</a>
        </div>
        <div class="related-product-slide owl-carousel">
          @foreach($related as $r_product)
          <!-- Single Product Slide -->
          <div class="single-related-product-slide">
            <div class="card product-card">
              <div class="card-body">
                @if($r_product->rentals)
                  <!-- Badge-->
                  <span class="badge rounded-pill badge-warning">Rental</span>
                @else
                  <span class="badge rounded-pill badge-success">Sale</span>
                @endif
                <!-- Thumbnail -->
                <a class="product-thumbnail d-block" href="{{ route('product', $r_product->slug) }}">
                  <img class="mb-2" src="{{ asset($r_product->image) }}" alt="">
                  @if($r_product->promotions)
                    <!-- Offer Countdown Timer: Please use event time this format: YYYY/MM/DD hh:mm:ss -->
                    <ul class="offer-countdown-timer d-flex align-items-center shadow-sm" data-countdown="{{ $r_product->promotions->date_end }} 00:00:00">
                      <li><span class="days">00</span>d</li>
                      <li><span class="hours">00</span>h</li>
                      <li><span class="minutes">00</span>m</li>
                      <li><span class="seconds">00</span>s</li>
                    </ul>
                  @endif
                </a>
                <!-- Product Title -->
                <a class="product-title d-block" href="{{ route('product', $r_product->slug) }}">
                  {{ Str::limit($r_product->name, 15) }}
                </a>
                <!-- Product Price -->
                <p class="sale-price">
                  $@money($r_product->price)
                  @if($r_product->discount_percent)
                  <span>$@money($r_product->price + (($r_product->price * $r_product->discount_percent) / 100) )</span>
                  @endif
                </p>
                <!-- Rating -->
                <!-- <div class="product-rating">
                  <i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i>
                  <i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i><i class="lni lni-star-filled"></i>
                </div> -->
                <!-- Add to Cart -->
                <a class="btn btn-success btn-sm showAddToCart" href="javascript:void()" data-bs-toggle="modal" data-bs-target="#addedToCart" onclick="event.preventDefault();" v-on:click="addToCart('{{ $r_product->id }}')"><i class="lni lni-cart"></i></a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    @endif

    <!-- Rating & Review Wrapper -->
    <div class="rating-and-review-wrapper bg-white py-3 mb-3">
      <div class="container">
        <h6>Ratings &amp; Reviews</h6>
        <div class="rating-review-content">
          @if(count($product->reviews) >= 1)
          <ul class="ps-0">
            @foreach($reviews as $review)
            <!-- Single User Review -->
            <li class="single-user-review d-flex">
              <div class="user-thumbnail">
                @if($review->user->profile_picture)
                  <img src="{{ asset($review->user->profile_picture) }}" alt="Picture">
                @else
                  <img src="{{ asset('static/img/user.png') }}" alt="Picture">
                @endif
              </div>
              <div class="rating-comment">
                <div class="rating">
                   @for ($i = 0; $i < $review->rating; $i++)
                    <i class="lni lni-star-filled"></i>
                   @endfor
                </div>
                <p class="comment mb-0">{{ $review->description }}</p>
                <span class="name-date"> <b>{{ $review->user->fullname }}</b> <span class="badge badge-warning">{{ $review->created_at->diffForHumans() }}</span></span>
              </div>
            </li>
            @endforeach
          </ul>
          @else
          <p>No reviews.</p>
          @endif
        </div>
      </div>
    </div>
    <!-- Ratings Submit Form-->
    <div class="ratings-submit-form bg-white py-3">
      <div class="container">
        <h6>Submit A Review</h6>
        @if(session()->has('message'))
            <p class="text-success">{{ session()->get('message') }}</p>
        @endif
        <form action="{{ route('add_review', $product->id) }}" method="post">
          @csrf
          <div class="stars mb-3">
            <input class="star-1" type="radio" name="rating" value="1" id="star1">
            <label class="star-1" for="star1"></label>
            <input class="star-2" type="radio" name="rating" value="2" id="star2">
            <label class="star-2" for="star2"></label>
            <input class="star-3" type="radio" name="rating" value="3" id="star3">
            <label class="star-3" for="star3"></label>
            <input class="star-4" type="radio" name="rating" value="4" id="star4">
            <label class="star-4" for="star4"></label>
            <input class="star-5" type="radio" name="rating" value="5" id="star5">
            <label class="star-5" for="star5"></label><span></span>
          </div>
          @error('rating')
              <p class="text-danger">{{ $message }}</p>
          @enderror
          <textarea class="form-control mb-3" id="comments" name="description" cols="30" rows="10" data-max-length="200" placeholder="Write your review..."></textarea>
          @error('description')
              <p class="text-danger">{{ $message }}</p>
          @enderror
          <button class="btn btn-sm btn-primary" type="submit">Save Review</button>
        </form>
      </div>
    </div>
  </div>
</div>

@include('front.partials.bottomnavbar')

<!-- production version, optimized for size and speed -->
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
  <script>
    var app = new Vue({
      el: '#app',
      data: {
        qty: 0
      },
      methods: {
        addToCart: async function (product) {
          const response = await axios.get(`/add-to-cart/${product}`);
        }
      }
    });
  </script>

@endsection
