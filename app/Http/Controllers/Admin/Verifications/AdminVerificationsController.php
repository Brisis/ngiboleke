<?php

namespace App\Http\Controllers\Admin\Verifications;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Verification;
use Illuminate\Support\Str;

class AdminVerificationsController extends Controller
{
  public function index()
  {
    $verifications = Verification::latest()->with(['user'])->paginate(10);

    return view('admin.verifications.verifications', [
      'verifications' => $verifications
    ]);
  }


  public function verification(Verification $verification)
   {
       if($verification->purpose == 'Merchant Verification'){
         return view('admin.verifications.verification_merchant', [
           'verification' => $verification
         ]);
       }

       return view('admin.verifications.verification', [
         'verification' => $verification
       ]);
   }

  public function verify(Request $request, Verification $verification)
  {
      $user = $verification->user;

      $user->is_verified = true;
      $user->save();

      $request->session()->flash('message', 'Account Verified Successfully.');

      return redirect()->back();
  }

  public function verification_merchant(Verification $verification)
   {
       return view('admin.verifications.verification', [
         'verification' => $verification
       ]);
   }

   public function verifyMerchant(Request $request, Verification $verification)
   {
       $user = $verification->user;

       $user->merchant->verified = true;
       $user->merchant->save();

       $request->session()->flash('message', 'Merchant Verified Successfully.');

       return redirect()->back();
   }

  public function unverify(Request $request, Verification $verification)
  {
      $user = $verification->user;
      if($verification->purpose == 'Merchant Verification'){
        $user->merchant->is_verified = false;
        $request->session()->flash('message', 'Merchant Verification Revoked.');
      }
      elseif ($verification->purpose == 'Customer Verification') {
          $user->is_verified = false;
          $request->session()->flash('message', 'Account Verification Revoked.');
      }

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
