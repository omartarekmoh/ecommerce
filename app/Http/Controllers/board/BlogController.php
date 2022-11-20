<?php

namespace App\Http\Controllers\board;

use App\Models\Blog;
use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\board\blog\StoreBlog;
use App\Models\BlogCategory;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $blogs = Blog::all();
        return view('board.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $categories = BlogCategory::latest()->get();
      return view('board.blog.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlog $request)
    {
      $request->validated();

      // dd($request->hasFile('avatar'));
      $blog = Blog::create([
         'title' => $request->title,
         'body' => $request->body,
         'blog_category_id' => $request->blog_category_id,
         // 'user_id' => auth()->user()->id,
      ]);
      
      // dd($request);
      $hasFile = $request->hasFile('avatar');

      if ($hasFile) {
         $path = $request->file('avatar')->store('avatar/blog');
         $blog->image()->save(
            Image::make(['path' => $path])
         );
      }
      return redirect(route("blog.index"))->withStatus("Sub Category Added!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
      $categories = BlogCategory::latest()->get();
      return view('board.blog.edit', compact('blog', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(StoreBlog $request, Blog $blog)
    {
      $request->validated();

      $blog->update([
         'title' => $request->title,
         'blog_category_id' => $request->blog_category_id,
         'body' => $request->body,

      ]);

      $hasFile = $request->hasFile('avatar');

      if ($hasFile) {
         $path = $request->file('avatar')->store('avatar/subcategory');
         if ($blog->image) {
            Storage::delete($blog->image->path);
            $blog->image->path = $path;
            $blog->image->save();
         } else {
            $blog->image()->save(
               Image::make(['path' => $path])
            );
         }
      }

      return redirect()->route('blog.index')->withStatus('Blog Was Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('blog.index');
    }
}
