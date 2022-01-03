<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function __construct()
   {
     $this->middleware(['guest']);
   }

    public function index()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
        'fullname' => 'required|max:255',
        'email' => 'required|email|max:255',
        'password' => 'required|confirmed'
      ]);

      User::create([
        'fullname' => $request->fullname,
        'email' => $request->email,
        'password' => Hash::make($request->password)
      ]);

      if (!auth()->attempt($request->only('email', 'password'))) {
        return back()->with('status', 'Invalid Login Details');
      }

      if (auth()->user()->is_admin) {
        return redirect()->route('admin.dashboard');
      }
      elseif (auth()->user()->is_seller) {
        return redirect()->route('seller.dashboard');
      }
      else {
        return redirect()->route('account.dashboard');
      }
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

}
