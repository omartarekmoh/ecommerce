<?php

namespace App\Models;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;

class SubCategory extends Model
{
   use HasFactory, HasTranslations;

   protected $fillable = ['title', 'status','category_id'];

   public $translatable = ['title'];
    
    public function getRouteKeyName()
	{
	    return 'slug';
	}

   public function scopeStatusName()
    {
        return $this->status == 0 ? "published" : "unpublished";
    }

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
