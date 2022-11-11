<?php

namespace App\Models;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;


class Category extends Model
{
   use HasFactory, HasTranslations;

   protected $fillable = ['title', 'description', 'status'];

   public $translatable = ['title', 'description'];

   

   public function image()
   {
      return $this->morphOne(Image::class, 'imageable');
   }

   public function scopeStatusName()
   {
      return $this->status == 0 ? "published" : "unpublished";
   }
}
