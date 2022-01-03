<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->with(['addresses'])->paginate(3);

        return view('admin.index', [
          'users' => $users
        ]);
    }

    public function users()
    {
        $users = User::latest()->with(['addresses'])->paginate(3);

        return view('admin.users.users', [
          'users' => $users
        ]);
    }

    public function login()
    {
      return view('admin.login');
    }

    public function brands()
    {
      return view('admin.brands');
    }

    public function categories()
    {
      return view('admin.categories');
    }

    public function locations()
    {
      return view('admin.locations');
    }


    public function notFound()
    {
      return view('admin.404');
    }

    public function addProduct()
    {
      return view('admin.add-product');
    }

    public function orders()
    {
      return view('admin.orders');
    }

    public function order()
    {
      return view('admin.order');
    }

    public function products()
    {
      return view('admin.products');
    }

    public function reviews()
    {
      return view('admin.reviews');
    }

    public function sellers()
    {
      return view('admin.sellers');
    }

    public function settings()
    {
      return view('admin.settings');
    }

    public function transactions()
    {
      return view('admin.transactions');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
