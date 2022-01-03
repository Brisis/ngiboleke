<?php

namespace App\Http\Controllers\Front\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Product $product)
    {

        $reviews = $product->reviews()->with(['user'])->latest()->paginate(3);

        $related = Product::where('collection_id', $product->collection_id)->latest()->paginate(5);

        // $average = $reviews->avg('rating');
        //
        //  dd($average);

        return view('front.product.product', [
          'product' => $product,
          'images' => $product->images,
          'related' => $related,
          'reviews' => $reviews
        ]);
    }

    public function addReview(Request $request, Product $product)
    {
      $this->validate($request, [
        'description' => 'required',
        'rating' => 'required|numeric'
      ]);

      $product->reviews()->create([
        'user_id' => auth()->user()->id,
        'description' => $request->description,
        'rating' => $request->rating
      ]);

      $request->session()->flash('message', 'Product Review Added.');

      return redirect()->back();
    }

    public function destroy($id)
    {
        //
    }
}
