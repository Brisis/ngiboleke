<?php

namespace App\Http\Controllers\Front\Checkout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = auth()->user();

        if ($user) {
          if (!$user->addresses) {
            $request->session()->flash('missing', "Please Complete your Profile Details");
            return redirect()->route('account.edit_address');//back();
          }
        }

        $cart = session()->get('cart');

        if (!$cart) {
          return redirect()->route('cart');
        }

        foreach($cart as $product => $item) {
          $a_product = Product::find($item['item_id']);
          if ($a_product->stock == 1) {
            if(isset($cart[$item['item_id']])) {
                unset($cart[$item['item_id']]);
                session()->put('cart', $cart);

                $request->session()->flash('message', $a_product->name.' is out of Stock');
                return redirect()->back();
            }
          }
        }

        return view('front.checkout.checkout');
    }

    public function payment()
    {
        return view('front.checkout.checkout-payment');
    }

    public function paid()
    {
        return view('front.checkout.payment-success');
    }

}
