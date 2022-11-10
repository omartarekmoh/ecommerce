<?php

namespace App\Models;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
   use HasFactory, Sluggable;

   protected $fillable = ['title', 'description', 'status'];

   public function sluggable(): array
   {
      return [
         'slug' => [
            'source' => 'title'
         ]
      ];
   }

   public function getRouteKeyName()
   {
      return 'slug';
   }

   

   public function image()
   {
      return $this->morphOne(Image::class, 'imageable');
   }

   public function scopeStatusName()
   {
      return $this->status == 0 ? "Published" : "Unpublished";
   }
}
