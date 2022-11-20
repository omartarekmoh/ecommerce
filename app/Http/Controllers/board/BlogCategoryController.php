<?php

namespace App\Http\Controllers\board;

use App\Models\Image;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\board\blogCategory\StoreBlogCategory;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $categories = BlogCategory::latest()->get();
      return view("board.blogCategory.index", compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view("board.blogCategory.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogCategory $request)
    {
      $request->validated();

      $category = BlogCategory::create([
         'title' => $request->title,
         'description' => $request->description,
         // 'user_id' => auth()->user()->id,
         'status' => $request->status,
      ]);

      $hasFile = $request->hasFile('avatar');

      if ($hasFile) {
         $path = $request->file('avatar')->store('avatar/blog/categories');
         $category->image()->save(
            Image::make(['path' => $path])
         );
      }
      return redirect(route("blog_category.index"))->withStatus("Category Added!");
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogCategory $blogCategory)
    {
      return view("board.blogCategory.edit", compact('blogCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogCategory $blogCategory)
    {
      $request->validated();

      $blogCategory->update([
         'title' => $request->title,
         'description' => $request->description,
         'status' => $request->status,
      ]);

      $hasFile = $request->hasFile('avatar');

      if ($hasFile) {
         $path = $request->file('avatar')->store('avatar/categories');
         if ($blogCategory->image) {
            Storage::delete($blogCategory->image->path);
            $blogCategory->image->path = $path;
            $blogCategory->image->save();
         } else {
            $blogCategory->image()->save(
               Image::make(['path' => $path])
            );
         }
      }

      return redirect()->route('category.index')->withStatus('Category Was Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogCategory $blogCategory)
    {
      $blogCategory->delete();

      return redirect()->route('blogCategor.index')->withStatus('Category Was Deleted');
    }
}
