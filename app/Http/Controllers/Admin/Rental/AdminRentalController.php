<?php

namespace App\Http\Controllers\Admin\Rental;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductRental;
use Illuminate\Support\Str;

class AdminRentalController extends Controller
{
  public function index()
  {
      $locations = ProductRental::latest()->paginate(10);
      //with(['addresses'])->

      return view('admin.rental.rentals', [
        'locations' => $locations
      ]);
  }

 public function addRental()
 {
     return view('admin.rental.add_rental');
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

      ProductRental::create([
        'country' => $request->country,
        'location_state' => $request->location_state,
        'city' => $request->city,
        'street' => $request->street,
        'map' => $request->map ? $request->map : $ngibo_map,
        'slug' => $slug
      ]);

      $request->session()->flash('message', 'Rental Added Successfully.');

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
