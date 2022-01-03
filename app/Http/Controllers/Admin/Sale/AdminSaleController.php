<?php

namespace App\Http\Controllers\Admin\Sale;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Str;

class AdminSaleController extends Controller
{
  public function index()
  {
      $locations = Product::latest()->paginate(10);
      //with(['addresses'])->

      return view('admin.sale.sales', [
        'locations' => $locations
      ]);
  }

}
