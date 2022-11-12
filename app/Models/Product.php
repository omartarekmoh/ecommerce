<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
   use HasFactory, HasTranslations;

   protected $fillable = [
      'title',
      'description',
      'category_id',
      'sub_category_id',
      'price',
      'discount',
      'stock',
      'status',
      'gallery'
   ];

   protected $casts = [
      'gallery' => 'array',
   ];

   public $translatable = ['title', 'description'];

   public function galleryUrl()
   {
      return collect($this->gallery)->map(function ($img) {
         return Storage::url($img);
      });
   }

   public function image()
   {
      return $this->morphOne(Image::class, 'imageable');
   }

   public function category()
   {
      return $this->belongsTo(Category::class);
   }

   public function subcategory()
   {
      return $this->belongsTo(Subcategory::class, 'sub_category_id');
   }

   public function scopeStatusName()
   {
      return $this->status == 0 ? "published" : "inactive";
   }
}
