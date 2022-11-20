<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class BlogCategory extends Model
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
