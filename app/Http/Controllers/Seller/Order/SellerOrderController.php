<?php

namespace App\Http\Controllers\Seller\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SellerOrderController extends Controller
{
  public function index()
  {
    return view('seller.order.orders');
  }

  public function order()
  {
    return view('seller.order.order');
  }
}
