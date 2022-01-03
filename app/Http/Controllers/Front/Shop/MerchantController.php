<?php

namespace App\Http\Controllers\Front\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Merchant;

class MerchantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $merchants = Merchant::where('verified', true)->latest()->paginate(10);

        return view('front.merchant.merchants', [
          'merchants' => $merchants
        ]);
    }

    public function merchant(Merchant $merchant)
    {
        if ($merchant->verified) {
          return view('front.merchant.merchant', [
            'merchant' => $merchant,
            'products' => $merchant->products
          ]);
        }

        return redirect()->route('merchants.merchants');
    }

    public function about(Merchant $merchant)
    {
        if ($merchant->verified) {
          return view('front.merchant.about', [
            'merchant' => $merchant
          ]);
        }

        return redirect()->route('merchants.merchants');
    }

    public function reviews(Merchant $merchant)
    {
        if ($merchant->verified) {
          return view('front.merchant.reviews', [
            'merchant' => $merchant,
            // 'reviews' => $merchant->reviews
          ]);
        }

        return redirect()->route('merchants.merchants');
    }

    public function createShop(Request $request)
    {
      return view('front.merchant.register');
    }

    public function store(Request $request)
    {
      $this->validate($request, [
        'name' => 'required|max:255',
        'username' => 'required|max:255',
        'country' => 'required',
        'city' => 'required|max:255'
      ]);

      if (Merchant::where('username', $request->username)->first()) {
        $request->session()->flash('err_message', 'Merchant username Taken');
        return redirect()->back();
      }

      auth()->user()->merchant()->create([
        'name' => $request->name,
        'username' => $request->username,
        'country' => $request->country,
        'city' => $request->city
      ]);

      $request->session()->flash('message', 'Merchant waiting Verification');

      auth()->user()->is_seller = true;
      auth()->user()->save();

      return redirect()->route('seller.dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
