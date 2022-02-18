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

        $related = Product::where('collection_id', $product->collection_id)
        ->where('is_draft', false)
        ->whereNotIn('id',[$product->id])
        ->paginate(5);

        $avgRating = $product->reviews->avg('rating');

        // $average = $reviews->avg('rating');
        //'avgRating' => $avgRating
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

    public function search(Request $request)
    {
      $search = $request->search ? $request->search : 'no search term';

      $products = Product::query()
        ->where('name', 'LIKE', "%{$search}%")
        ->orWhere('description', 'LIKE', "%{$search}%")
        ->get();
        // ->paginate(10);

      return view('front.product.products', [
        'products' => $products->where('is_draft', false),
        'searchQry' => $search
      ]);
    }

    public function destroy($id)
    {
        //
    }
}
