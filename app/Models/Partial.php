<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Partial extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = ['title', 'body','type'];

   public $translatable = ['title', 'body'];

   public function image()
   {
       return $this->morphOne(Image::class, 'imageable');
   }
    
}
