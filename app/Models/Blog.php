<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory, HasTranslations;
    protected $guarded = [];

   public $translatable = ['title', 'body'];


    
   public function image()
   {
      return $this->morphOne(Image::class, 'imageable');
   }

}
