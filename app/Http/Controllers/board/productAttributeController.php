<?php

namespace App\Http\Controllers\board;

use App\Models\Image;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

use App\Models\ProductAttribute;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\board\subcategory\StoreSubCategory;
use App\Http\Requests\board\productAttribute\StoreProductAttribute;

class productAttributeController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
      $productAttributes = ProductAttribute::all();
      return view("board.productsAttributes.index", compact('productAttributes'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      return view("board.productsAttributes.create");
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(storeProductAttribute $request)
   {
      $request->validated();

      $productAttribute = ProductAttribute::create([
         'name' => $request->name,
         // 'user_id' => auth()->user()->id,
      ]);

      return redirect(route("product-attribute.index"))->withStatus("Product Attribute Added!");
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit(ProductAttribute $productAttribute)
   {
      return view("board.productsAttributes.edit", compact('productAttribute'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function update(StoreProductAttribute $request, ProductAttribute $productAttribute)
   {
      $request->validated();

      $productAttribute->update([
         'name' => $request->name,
      ]);

      return redirect()->route('product-attribute.index')->withStatus('Category Was Updated');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy(ProductAttribute $productAttribute)
   {
      $productAttribute->delete();

      return redirect()->route('subcategory.index')->withStatus('Category Was Deleted');
   }
}
