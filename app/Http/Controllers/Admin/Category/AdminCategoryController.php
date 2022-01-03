<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Collection;
use Illuminate\Support\Str;
use Image;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         $categories = Category::latest()->paginate(10);
         //with(['addresses'])->

         return view('admin.category.categories', [
           'categories' => $categories
         ]);
     }

     public function category(Category $category)
     {
       return view('admin.category.category', [
         'category' => $category,
         'collections' => $category->collections
       ]);
     }

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */

    public function addCategory()
    {
        return view('admin.category.add_category');
    }

     public function store(Request $request)
     {
         $this->validate($request, [
           'name' => 'required|max:255',
           'icon' => 'required|max:255',
           'picture' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:5048'
         ]);

         $image = $request->file('picture');
         $filename = time().'.'.$image->getClientOriginalExtension();

         $destination = 'uploads/categories/'.$filename;
         $image->move(public_path('uploads/categories/'), $filename);

         $slug = Str::slug($request->name, '-');

         Category::create([
           'name' => $request->name,
           'slug' => $slug,
           'icon' => $request->icon,
           'picture' => $destination
         ]);

         $request->session()->flash('message', 'Category Added Successfully.');

         return redirect()->back();
     }

     public function addCollection(Category $category)
     {
         return view('admin.category.add_collection', [
           'category' => $category,
         ]);
     }

      public function storeCollection(Category $category,Request $request)
      {
          $this->validate($request, [
            'name' => 'required|max:255',
            'picture' => 'required|image|mimes:jpg,jpeg,png,gif,svg,webp|max:5048'
          ]);

          $image = $request->file('picture');
          $filename = time().'.'.$image->getClientOriginalExtension();

          $image_resize = Image::make($image->getRealPath());
          $image_resize->fit(400, 500, function($constraint) {
            $constraint->aspectRatio();
          });

          $destination = 'uploads/collections/'.$filename;

          $image_resize->save(public_path($destination), 100);

          $slug = Str::slug($request->name, '-');

          $category->collections()->create([
            'name' => $request->name,
            'slug' => $slug,
            'picture' => $destination
          ]);

          $request->session()->flash('message', 'Collection Added Successfully.');

          return redirect()->back();
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
