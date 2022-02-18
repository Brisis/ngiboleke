<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Image;

class SellerDashboardController extends Controller
{

    public function index()
    {
        $customers = User::latest()->with(['addresses'])->paginate(3);
        $merchant = auth()->user()->merchant;

        return view('seller.index', [
          'merchant' =>$merchant,
          'customers' => $customers
        ]);
    }

    public function profile()
    {
        $merchant = auth()->user()->merchant;

        return view('seller.account.profile', [
          'merchant' => $merchant
        ]);
    }

    public function edit()
    {
        $merchant = auth()->user()->merchant;

        return view('seller.account.edit', [
          'merchant' => $merchant
        ]);
    }

    public function storeChanges(Request $request)
    {
        $merchant = auth()->user()->merchant;

        $merchant->name = $request->name ? $request->name : $merchant->name;
        $merchant->username = $request->username ? $request->username : $merchant->username;
        $merchant->phone = $request->phone ? $request->phone : $merchant->phone;
        $merchant->country = $request->country ? $request->country : $merchant->country;
        $merchant->city = $request->city ? $request->city : $merchant->city;
        $merchant->address = $request->address ? $request->address : $merchant->address;
        $merchant->video = $request->video ? $request->video : $merchant->video;
        $merchant->description = $request->description ? $request->description : $merchant->description;

        $merchant->save();

        $request->session()->flash('message', 'Merchant info updated.');

        return redirect()->back();
    }

    public function edit_picture()
    {
        $merchant = auth()->user()->merchant;

        return view('seller.account.edit_picture', [
          'merchant' => $merchant
        ]);
    }

    public function storeLogoChanges(Request $request)
    {
        $merchant = auth()->user()->merchant;

        $this->validate($request, [
          'merchant_logo' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048'
        ]);

        $image = $request->file('merchant_logo');
        $filename = time().'.'.$image->getClientOriginalExtension();

        $image_resize = Image::make($image->getRealPath());
        $image_resize->fit(80, 80, function($constraint) {
          $constraint->aspectRatio();
        });

        $destination = 'uploads/merchants/profiles/'.$filename;

        $image_resize->save(public_path($destination), 100);

        $merchant->merchant_logo = $destination;

        $merchant->save();

        $request->session()->flash('message', 'Merchant Profile Image Updated.');

        return redirect()->back();
    }

    public function edit_cover()
    {
        $merchant = auth()->user()->merchant;

        return view('seller.account.edit_cover', [
          'merchant' => $merchant
        ]);
    }

    public function storeCoverChanges(Request $request)
    {
        $merchant = auth()->user()->merchant;

        $this->validate($request, [
          'merchant_cover' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048'
        ]);

        $image = $request->file('merchant_cover');
        $filename = time().'.'.$image->getClientOriginalExtension();

        $destination = 'uploads/merchants/covers/'.$filename;

        $image->move(public_path('uploads/merchants/covers/'), $filename);

        $merchant->merchant_cover = $destination;

        $merchant->save();

        $request->session()->flash('message', 'Merchant Cover Image Updated.');

        return redirect()->back();
    }

    public function unverified()
    {
      $merchant = auth()->user()->merchant;

      if ($merchant->verified) {
        return redirect()->route('seller.dashboard');
      }

      return view('seller.unverified');
    }

    public function verify()
    {
      return view('front.settings.verify_merchant');

    }

    public function verifyMerchant(Request $request)
    {

      $this->validate($request, [
        'email' => 'required|max:255',
        'purpose' => 'required',
        'identification' => 'required'
      ]);

      $image = $request->file('identification');
      $filename = time().'.'.$image->getClientOriginalExtension();

      $destination = 'uploads/verification/'.$filename;
      $image->move(public_path('uploads/verification/'), $filename);

      auth()->user()->verifications()->create([
        'email' => $request->email,
        'purpose' => $request->purpose,
        'identification' => $destination
      ]);

      $request->session()->flash('message', 'Account waiting Verification');

      return redirect()->route('seller.dashboard');
    }


    public function settings()
    {
      return view('seller.settings');
    }

}
