<?php

namespace App\Http\Controllers\Admin\Promotion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductPromotion;
use Illuminate\Support\Str;

class AdminPromotionController extends Controller
{
  public function index()
  {
      $locations = ProductPromotion::latest()->paginate(10);
      //with(['addresses'])->

      return view('admin.promotion.promotions', [
        'locations' => $locations
      ]);
  }

 public function addPromotion()
 {
     return view('admin.promotion.add_promotion');
 }

  public function store(Request $request)
  {
      $this->validate($request, [
        'country' => 'required|max:255',
        'location_state' => 'required|max:255',
        'city' => 'required|max:255',
        'street' => 'required|max:255'
      ]);

      $ngibo_map = "Ngiboleke Maps";

      $slug = Str::slug($request->country, '-');

      ProductPromotion::create([
        'country' => $request->country,
        'location_state' => $request->location_state,
        'city' => $request->city,
        'street' => $request->street,
        'map' => $request->map ? $request->map : $ngibo_map,
        'slug' => $slug
      ]);

      $request->session()->flash('message', 'Promotion Added Successfully.');

      return redirect()->back();
  }


  public function show($id)
  {
      //
  }

  public function update(Request $request, $id)
  {
      //
  }

  public function destroy($id)
  {
      //
  }
}
