<?php

namespace App\Http\Controllers\Seller\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Collection;
use App\Models\Product;
use App\Models\Discount;
use App\Models\Inventory;
use App\Models\ProductColor;
use App\Models\ProductPromotion;
use App\Models\ProductRental;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Image;

class SellerProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = auth()->user()->merchant->products;

      return view('seller.product.products', [
        'products' => $products
      ]);
    }

    public function addProduct()
    {
      $collections = Collection::all();

      return view('seller.product.add', [
        'collections' => $collections
      ]);
    }

    public function store(Request $request)
    {
      $this->validate($request, [
        'name' => 'required|max:255',
        'price' => 'required|max:255',
        'stock' => 'required',
        'collection' => 'required'
      ]);

      $slug = Str::slug($request->name, '-');

      $request->user()->merchant->products()->create([
        'name' => $request->name,
        'collection_id' => $request->collection,
        'slug' => $slug,
        'price' => $request->price,
        'discount_percent' => $request->discount_percent ? $request->discount_percent : null,
        'stock' => $request->stock,
        'stock_left' => $request->stock,
        'SKU' => $request->sku,
        'video' => $request->video,
        'description' => $request->description
      ]);

      //$request->session()->flash('message', 'Product saved to Draft.');

      return redirect()->route('seller.products.products');
    }

    public function editProduct(Product $product)
    {
      $collections = Collection::all();

      return view('seller.product.edit', [
        'product' => $product,
        'images' => $product->images,
        'collections' => $collections
      ]);
    }

    public function storeEdit(Request $request, Product $product)
    {
      $this->validate($request, [
        'name' => 'required|max:255',
        'price' => 'required|max:255',
        'stock' => 'required'
      ]);

      $slug = $request->name ? Str::slug($request->name, '-') : $product->slug;

      $product->name = $request->name ? $request->name : $product->name;
      // $product->collection_id = $request->collection ? $request->collection : $product->collection->id;
      $product->slug = $slug;
      $product->price = $request->price ? $request->price : $product->price;
      $product->discount_percent = $request->discount_percent ? $request->discount_percent : $product->discount_percent;
      $product->stock = $request->stock ? $request->stock : $product->stock;
      $product->SKU = $request->sku ? $request->sku : $product->sku;
      $product->video = $request->video ? $request->video : $product->video;
      $product->description = $request->description ? $request->description : $product->description;

      $product->save();

      $request->session()->flash('message', 'Product Edited Successfully.');

      return redirect()->back();
    }

    public function addImages(Product $product)
    {
      return view('seller.product.add_image', [
        'product' => $product,
        'images' => $product->images
      ]);
    }

    public function storeImages(Request $request, Product $product)
    {
      $this->validate($request, [
        'image_path' => 'required|image|mimes:jpg,jpeg,png,gif,svg,webp|max:2048'
      ]);

      $image = $request->file('image_path');
      $filename = time().'.'.$image->getClientOriginalExtension();

      $image_resize = Image::make($image->getRealPath());
      $image_resize->fit(300, 300, function($constraint) {
        $constraint->aspectRatio();
      });

      $destination = 'uploads/products/thumbnails/'.$filename;

      $image_resize->save(public_path($destination), 100);


      $destination_og = 'uploads/products/'.$filename;
      $image->move(public_path('uploads/products/'), $filename);

      $product->images()->create([
        'image_path' => $destination_og,
        'thumbnail' => $destination
      ]);

      $product_images = $product->images;

      $last_image = $product_images[count($product_images) - 1];

      $product->image = $last_image->thumbnail;
      $product->save();

      $request->session()->flash('message', 'Product Image Added.');

      return redirect()->back();
    }

    public function addColor(Product $product)
    {
      return view('seller.product.add_color', [
        'product' => $product,
        'colors' => $product->colors
      ]);
    }

    public function storeColor(Request $request, Product $product)
    {
      $this->validate($request, [
        'name' => 'required|max:255',
        'color' => 'required|max:255'
      ]);

      $product->colors()->create([
        'name' => $request->name,
        'color' => $request->color
      ]);

      $request->session()->flash('message', 'Product Color Added.');

      return redirect()->back();
    }

    public function addPromotion(Product $product)
    {
      return view('seller.product.add_promotion', [
        'product' => $product,
        'promotion' => $product->promotions
      ]);
    }

    public function storePromotion(Request $request, Product $product)
    {
      $this->validate($request, [
        'date_end' => 'required|max:255'
      ]);

      $product->promotions()->create([
        'date_end' => $request->date_end
      ]);

      $request->session()->flash('message', 'Promotion Added Successfully.');

      return redirect()->back();
    }

    public function addRental(Product $product)
    {
      return view('seller.product.add_rental', [
        'product' => $product,
        'rental' => $product->rentals
      ]);
    }

    public function storeRental(Request $request, Product $product)
    {
      $this->validate($request, [
        'period' => 'required|numeric',
        'percentage' => 'required|max:255'
      ]);

      $product->rentals()->create([
        'period' => $request->period,
        'percentage' => $request->percentage,
        'policy' => $request->policy ? $request->policy : null,
      ]);

      $request->session()->flash('message', 'Product Rental Added.');

      return redirect()->back();
    }

    public function rentalEdit(Request $request, Product $product)
    {
      $this->validate($request, [
        'period' => 'required|numeric',
        'percentage' => 'required|max:255'
      ]);

      $rental = $product->rental;

      $rental->period = $request->period ? $request->period : $rental->period;
      $rental->percentage = $request->percentage ? $request->percentage : $rental->percentage;
      $rental->policy = $request->policy ? $request->policy : $rental->policy;

      $rental->save();

      $request->session()->flash('message', 'Product Rental Edited.');

      return redirect()->back();
    }

    public function addHirePurchase(Product $product)
    {
      return view('seller.product.add_hirepurchase', [
        'product' => $product,
        'hirepurchase' => $product->hirepurchase
      ]);
    }

    public function storeHirePurchase(Request $request, Product $product)
    {
      $this->validate($request, [
        'period' => 'required|numeric',
        'percentage' => 'required|max:255'
      ]);

      $product->hirepurchase()->create([
        'period' => $request->period,
        'percentage' => $request->percentage,
        'policy' => $request->policy ? $request->policy : null,
      ]);

      $request->session()->flash('message', 'Product Hire Purchase Added.');

      return redirect()->back();
    }

    public function hirePurchaseEdit(Request $request, Product $product)
    {
      $this->validate($request, [
        'period' => 'required|numeric',
        'percentage' => 'required|max:255'
      ]);

      $hirepurchase = $product->hirepurchase;

      $hirepurchase->period = $request->period ? $request->period : $hirepurchase->period;
      $hirepurchase->percentage = $request->percentage ? $request->percentage : $hirepurchase->percentage;
      $hirepurchase->policy = $request->policy ? $request->policy : $hirepurchase->policy;

      $hirepurchase->save();

      $request->session()->flash('message', 'Product Hire Purchase Edited.');

      return redirect()->back();
    }

    public function destroy($id)
    {
        //
    }

    public function publish(Request $request, Product $product)
    {
      if ($product->is_draft && $product->stock >= 1 && count($product->images) >= 1) {
        $product->is_draft = false;
        $product->save();

        $request->session()->flash('message', 'Product Successfully Published.');

        return redirect()->back();
      }

      $request->session()->flash('warning', 'Add atleast 1 image and inventory to Publish.');

      return redirect()->back();
    }

    public function makeDraft(Request $request, Product $product)
    {
      $product->is_draft = true;
      $product->save();

      $request->session()->flash('message', 'Product saved to Draft.');

      return redirect()->back();
    }
}
