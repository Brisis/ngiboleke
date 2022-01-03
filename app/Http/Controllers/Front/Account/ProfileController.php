<?php

namespace App\Http\Controllers\Front\Account;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.account.profile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function settings()
    {
         return view('front.settings.profile');
    }

    public function editDetails()
    {
         return view('front.settings.edit-details');
    }

    public function updateDetails(Request $request)
    {
      $user = auth()->user();

      $user->update([
        'firstname' => $request->firstname,
        'lastname' => $request->lastname
      ]);

      $request->session()->flash('message', 'Account Details Updated Successfully.');

      return redirect()->back();
    }

    public function editAddress()
    {
         return view('front.settings.edit-address');
    }

    public function addAddress(Request $request)
    {

      $this->validate($request, [
        'country' => 'required|max:255',
        'city' => 'required|max:255',
        'phone' => 'required|string|max:255',
        'shipping' => 'required|max:255'
      ]);

      $request->user()->addresses()->create([
        'country' => $request->country,
        'city' => $request->city,
        'phone' => $request->phone,
        'shipping' => $request->shipping
      ]);

      $request->session()->flash('message', 'Account Addresses Added Successfully.');

      return redirect()->back();
    }

    public function updateAddress(Request $request)
    {
      $this->validate($request, [
        'city' => 'required|max:255',
        'phone' => 'required|string|max:255',
        'shipping' => 'required|max:255'
      ]);

      $request->user()->addresses()->update([
        'country' => $request->country ? $request->country : auth()->user()->addresses->country,
        'city' => $request->city,
        'phone' => $request->phone,
        'shipping' => $request->shipping
      ]);

      $request->session()->flash('message', 'Account Addresses Updated Successfully.');

      return redirect()->back();
    }

    public function editPicture()
    {
         return view('front.settings.edit-picture');
    }

    /*public function updatePicture(Request $request)
    {
      if ($request->hasFile('image')) {
         User::uploadAvatar($request->image);
         $request->session()->flash('message', 'Account Picture Uploaded.');
      }

      return redirect()->back();
    }*/

    public function updatePicture(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:5048',
        ]);

        $image = $request->file('image');
        $filename = time().'.'.$image->getClientOriginalExtension();

        $image_resize = Image::make($image->getRealPath());
        $image_resize->fit(300, 300, function($constraint) {
          $constraint->aspectRatio();
        });

        $destination = 'uploads/thumbnails/'.$filename;

        $image_resize->save(public_path($destination), 100);

        //$image->storeAs('uploads', $filename, 'public');
        $user = auth()->user();
        $user->profile_picture = $destination;

        $user->save();

        $request->session()->flash('message', 'Account Picture Uploaded.');

        return redirect()->back();
    }

    public function addVerification()
    {
         return view('front.settings.verify');
    }

    public function verify(Request $request)
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

      return redirect()->route('account.dashboard');
    }

    public function destroy($id)
    {
        //
    }
}
