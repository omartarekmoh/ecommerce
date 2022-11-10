<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
   use HasFactory, sluggable;

   protected $fillable = [
      'title',
      'description',
      'category_id',
      'sub_category_id',
      'price',
      'discount',
      'stock',
      'status'
   ];

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
      return $this->status == 0 ? "Published" : "Inactive";
   }
}
