<?php

namespace App\Http\Controllers\board;

use App\Models\Image;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\board\category\StoreCategory;

class CategoryController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
      $categories = Category::latest()->get();
      return view("board.categories.index", compact('categories'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      return view("board.categories.create");
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(StoreCategory $request)
   {
      $request->validated();

      $category = Category::create([
         'title' => $request->title,
         'description' => $request->description,
         // 'user_id' => auth()->user()->id,
         'status' => $request->status,
      ]);

      $hasFile = $request->hasFile('avatar');

      if ($hasFile) {
         $path = $request->file('avatar')->store('avatar/categories');
         $category->image()->save(
            Image::make(['path' => $path])
         );
      }
      return redirect(route("category.index"))->withStatus("Category Added!");
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit(Category $category)
   {
      return view("board.categories.edit", compact('category'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function update(StoreCategory $request, Category $category)
   {
      $request->validated();

      $category->update([
         'title' => $request->title,
         'description' => $request->description,
         'status' => $request->status,
      ]);

      $hasFile = $request->hasFile('avatar');

      if ($hasFile) {
         $path = $request->file('avatar')->store('avatar/categories');
         if ($category->image) {
            Storage::delete($category->image->path);
            $category->image->path = $path;
            $category->image->save();
         } else {
            $category->image()->save(
               Image::make(['path' => $path])
            );
         }
      }

      return redirect()->route('category.index')->withStatus('Category Was Updated');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy(Category $category)
   {
      $category->delete();

      return redirect()->route('category.index')->withStatus('Category Was Deleted');
   }
}
