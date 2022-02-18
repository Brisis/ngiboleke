<?php

namespace App\Http\Controllers\Front\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Product;
use App\Models\ProductPromotion;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->where('is_draft', false);

        $top_products = $products->paginate(8);
        $weekly_products = $products->paginate(4);
        $featured_products = $products->paginate(4);

        $flashsales = $products->paginate(8);
        $categories = Category::latest()->paginate(6);
        $collections = Collection::latest()->paginate(10);

        return view('front.home.index', [
          'top_products' => $top_products,
          'weekly_products' => $weekly_products,
          'featured_products' => $featured_products,
          'flashsales' => $flashsales,
          'categories' => $categories,
          'collections' => $collections
        ]);
    }

    public function notFound()
    {
      return "Not Found";
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
