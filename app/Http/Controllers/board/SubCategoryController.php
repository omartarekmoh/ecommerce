<?php

namespace App\Http\Controllers\board;

use App\Models\Image;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;
use App\Http\Requests\board\subcategory\StoreSubCategory;

class SubCategoryController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
      $subcategories = SubCategory::latest()->get();
      return view("board.subcategories.index", compact('subcategories'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      $categories = Category::all();
      return view("board.subcategories.create", compact("categories"));
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(StoreSubCategory $request)
   {
      $request->validated();

      $subcategory = SubCategory::create([
         'title' => $request->title,
         'category_id' => $request->category,
         // 'user_id' => auth()->user()->id,
         'status' => $request->status,
      ]);

      $hasFile = $request->hasFile('avatar');

      if ($hasFile) {
         $path = $request->file('avatar')->store('avatar/subcategory');
         $subcategory->image()->save(
            Image::make(['path' => $path])
         );
      }
      return redirect(route("subcategory.index"))->withStatus("Sub Category Added!");
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit(SubCategory $subcategory)
   {
      $categories = Category::all();
      return view("board.subcategories.edit", compact('subcategory', 'categories'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function update(StoreSubCategory $request, SubCategory $subcategory)
   {
      $request->validated();

      $subcategory->update([
         'title' => $request->title,
         'description' => $request->description,
         'status' => $request->status,
      ]);

      $hasFile = $request->hasFile('avatar');

      if ($hasFile) {
         $path = $request->file('avatar')->store('avatar/subcategory');
         if ($subcategory->image) {
            Storage::delete($subcategory->image->path);
            $subcategory->image->path = $path;
            $subcategory->image->save();
         } else {
            $subcategory->image()->save(
               Image::make(['path' => $path])
            );
         }
      }

      return redirect()->route('subcategory.index')->withStatus('Category Was Updated');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy(SubCategory $subcategory)
   {
      $subcategory->delete();

      return redirect()->route('subcategory.index')->withStatus('Category Was Deleted');
   }
}
