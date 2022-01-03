<?php

namespace App\Http\Controllers\Seller\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class SellerCustomerController extends Controller
{
  public function index()
  {
      // $customers = User::latest()->with(['addresses'])->paginate(3);

      $customers = User::latest()->paginate(3);

      return view('seller.customer.customers', [
        'customers' => $customers
      ]);
  }
}
