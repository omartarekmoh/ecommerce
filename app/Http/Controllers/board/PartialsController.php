<?php

namespace App\Http\Controllers\board;

use App\Models\Image;
use App\Models\Partial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\board\paritals\UpdatePartials;

class PartialsController extends Controller
{
    public function contact()
    {
      $contact = Partial::where('type' , 'contact')->first();
      return view('board.contact.edit', compact('contact'));
    }

    public function about()
    {
      $about = Partial::where('type' , 'about')->first();
      return view('board.about.edit', compact('about'));
    }

    public function terms()
    {
      $terms = Partial::where('type' , 'terms')->first();
      return view('board.terms.edit', compact('terms'));
    }

    public function termsUpdate(UpdatePartials $request)
    {
      $request->validated();
      $terms = Partial::where('type' , 'terms')->first();
      $terms->update([
         'body' => $request->body,
         'title' => $request->title,
      ]);

      $hasFile = $request->hasFile('avatar');

      if ($hasFile) {
         $path = $request->file('avatar')->store('avatar/subcategory');
         if ($terms->image) {
            Storage::delete($terms->image->path);
            $terms->image->path = $path;
            $terms->image->save();
         } else {
            $terms->image()->save(
               Image::make(['path' => $path])
            );
         }
      }

      return redirect()->route('terms.edit');
    }


    public function contactUpdate(UpdatePartials $request)
    {
      $request->validated();
      $contact = Partial::where('type' , 'contact')->first();
      $contact->update([
         'body' => $request->body,
         'title' => $request->title,
      ]);

      $hasFile = $request->hasFile('avatar');

      if ($hasFile) {
         $path = $request->file('avatar')->store('avatar/subcategory');
         if ($contact->image) {
            Storage::delete($contact->image->path);
            $contact->image->path = $path;
            $contact->image->save();
         } else {
            $contact->image()->save(
               Image::make(['path' => $path])
            );
         }
      }

      return redirect()->route('contact.edit');
    }


    public function aboutUpdate(UpdatePartials $request)
    {
      $request->validated();
      $about = Partial::where('type' , 'about')->first();
      $about->update([
         'body' => $request->body,
         'title' => $request->title,
      ]);

      $hasFile = $request->hasFile('avatar');

      if ($hasFile) {
         $path = $request->file('avatar')->store('avatar/subcategory');
         if ($about->image) {
            Storage::delete($about->image->path);
            $about->image->path = $path;
            $about->image->save();
         } else {
            $about->image()->save(
               Image::make(['path' => $path])
            );
         }
      }

      return redirect()->route('about.edit');
    }
}
