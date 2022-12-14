<?php

namespace App\Http\Controllers\board;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests\board\product\StoreProduct;
use App\Models\AttributeValue;
use App\Models\Category;
use App\Models\ProductAttribute;
use App\Models\SubCategory;
use Attribute;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
      $products = Product::latest()->get();
      return view("board.products.index", compact('products'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      $categories = Category::all();
      $subcategories = SubCategory::all();
      $productAttributes = ProductAttribute::all();
      return view("board.products.create", compact('subcategories', 'categories', 'productAttributes'));
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(StoreProduct $request)
   {
      $request->validated();

      $product = Product::make([
         'title' => $request->title,
         'description' => $request->description,
         'category_id' => $request->category_id,
         'sub_category_id' => $request->sub_category_id,
         // 'attribute_id' => $request->attribute_id,
         'price' => $request->price,
         'discount' => $request->discount,
         'stock' => $request->stock,
         // 'user_id' => auth()->user()->id,
         'status' => $request->status,
      ]);

      $hasFile = $request->hasFile('gallery');
      
      $gallery = [];
      
      if ($hasFile) {
         foreach($request->file('gallery') as $file) {
            $gallery[] = $file->store('product/gallery');
         } 

         $product->gallery = $gallery;
      }

      $product->save();

      $hasFile = $request->hasFile('avatar');

      if ($hasFile) {
         $path = $request->file('avatar')->store('avatar/products');
         $product->image()->save(
            Image::make(['path' => $path])
         );
      }   

      // dd($request->attribute_name);

      if(isset($request->attribute_name)) {
         foreach($request->attribute_name as $index => $att) {
            AttributeValue::create([
               'value' => $request->attribute_value[$index],
               'product_attribute_id' => $att,
               'product_id' => $product->id,
            ]);
      }
      
      }

      return redirect(route("product.index"))->withStatus("Category Added!");
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit(Product $product)
   {
      // dd($product->attributeValue);
      $categories = Category::all();
      $subcategories = SubCategory::all();
      $productAttributes = ProductAttribute::all();
      $attributeValues = $product->attributeValue;
      return view("board.products.edit", compact('product', 'categories', 'subcategories', 'productAttributes', 'attributeValues'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function update(StoreProduct $request, Product $product)
   {
      // dd('adadad');
      $request->validated();

      $product->update([
         'title' => $request->title,
         'description' => $request->description,
         'category_id' => $request->category_id,
         'sub_category_id' => $request->sub_category_id,
         // 'attribute_id' => $request->attribute_id,
         'price' => $request->price,
         'discount' => $request->discount,
         'stock' => $request->stock,
         // 'user_id' => auth()->user()->id,
         'status' => $request->status,
      ]);

      $hasFile = $request->hasFile('avatar');

      if ($hasFile) {
         $path = $request->file('avatar')->store('avatar/products');
         if ($product->image) {
            Storage::delete($product->image->path);
            $product->image->path = $path;
            $product->image->save();
         } else {
            $product->image()->save(
               Image::make(['path' => $path])
            );
         }
      }

      return redirect()->route('product.index')->withStatus('Category Was Updated');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy(Product $product)
   {
      $product->delete();

      return redirect()->route('product.index')->withStatus('Category Was Deleted');
   }
}
