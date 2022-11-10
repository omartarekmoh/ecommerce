<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubCategory extends Model
{
   use HasFactory, sluggable;

   protected $fillable = ['title', 'status','category_id'];


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

   public function scopeStatusName()
    {
        return $this->status == 0 ? "Published" : "Unpublished";
    }

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
