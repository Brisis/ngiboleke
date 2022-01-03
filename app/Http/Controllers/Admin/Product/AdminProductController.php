<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = Product::where('is_draft', false)->latest()->paginate(10);

      return view('admin.product.products', [
        'products' => $products
      ]);
    }

    public function drafts()
    {
      $products = Product::where('is_draft', true)->latest()->paginate(10);

      return view('admin.product.drafts', [
        'products' => $products
      ]);
    }

    public function product(Product $product)
    {
      return view('admin.product.product', [
        'product' => $product,
        'images' => $product->images
      ]);
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
