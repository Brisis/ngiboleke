<?php

namespace App\Http\Controllers\Front\Checkout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.checkout.cart');
    }

    public function addToCart($id)
  {
      $product = Product::find($id);
      if(!$product) {
          abort(404);
      }

      if ($product->stock == 1) {
        return redirect()->route('product', $product->slug);
      }

      $cart = session()->get('cart');
      // if cart is empty then this the first product
      if(!$cart) {
          $cart = [
                  $id => [
                      "item_id" => $product->id,
                      "name" => $product->name,
                      "quantity" => 1,
                      "price" => $product->price,
                      "slug" => $product->slug,
                      "image" => $product->image
                  ]
          ];
          session()->put('cart', $cart);
          return redirect()->back()->with('success', 'Product added to cart successfully!');
      }
      // if cart not empty then check if this product exist then increment quantity
      if(isset($cart[$id])) {
          $cart[$id]['quantity']++;

          $a_product = Product::find($cart[$id]['item_id']);
          if ($cart[$id]['quantity'] >= $a_product->stock) {
            return redirect()->route('product', $a_product->slug);
          }

          session()->put('cart', $cart);
          return redirect()->back()->with('success', 'Product added to cart successfully!');
      }
      // if item not exist in cart then add to cart with quantity = 1
      $cart[$id] = [
          "item_id" => $product->id,
          "name" => $product->name,
          "quantity" => 1,
          "price" => $product->price,
          "slug" => $product->slug,
          "image" => $product->image
      ];
      session()->put('cart', $cart);
      return redirect()->back()->with('success', 'Product added to cart successfully!');
  }

  public function update(Request $request)
  {
      if($request->id and $request->quantity)
      {
          $cart = session()->get('cart');

          $cart[$request->id]["quantity"] = $request->quantity;

          $a_product = Product::find($cart[$request->id]['item_id']);
          if ($request->quantity >= $a_product->stock) {
            return redirect()->route('product', $a_product->slug);
          }

          session()->put('cart', $cart);

          session()->flash('success', 'Cart updated successfully');
      }
  }

  public function remove(Request $request)
  {
      if($request->id) {

          $cart = session()->get('cart');

          if(isset($cart[$request->id])) {

              unset($cart[$request->id]);

              session()->put('cart', $cart);
          }

          session()->flash('success', 'Product removed successfully');
      }
  }

  public function removeAll(Request $request)
  {
      if($request->session()->has('cart')) {
          $request->session()->forget('cart');

          session()->flash('success', 'Products removed successfully');
      }

      return redirect()->back();
  }

}
