<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
      return view('admin.index');
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

}
