<?php

namespace App\Http\Controllers\Front\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Collection;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::latest()->paginate(20);

        $collections = Collection::latest()->paginate(10);

        return view('front.category.categories', [
          'categories' => $categories,
          'collections' => $collections
        ]);
    }

    public function category(Category $category)
    {
        return view('front.category.category', [
          'category' => $category,
          'collections' => $category->collections
        ]);
    }

    public function collections()
    {
        $collections = Collection::latest()->paginate(10);

        return view('front.category.collections', [
          'collections' => $collections
        ]);
    }

    public function collection(Collection $collection)
    {
        $collections = Collection::where('category_id', $collection->category_id)
        ->whereNotIn('id',[$collection->id])
        ->paginate(3);

        return view('front.category.collection', [
          'collection' => $collection,
          'products' => $collection->products,
          'collections' => $collections
        ]);
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
