<?php

namespace App\Http\Controllers\Seller\Review;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SellerReviewController extends Controller
{
  public function index()
  {
    return view('seller.review.reviews');
  }
}
