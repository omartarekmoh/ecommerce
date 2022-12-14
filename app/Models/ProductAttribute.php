<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductAttribute extends Model
{
    use HasFactory, HasTranslations;

   protected $fillable = ['name'];

   public $translatable = ['name'];

   public function attributeValue()
   {
      return $this->hasMany(AttributeValue::class);
   }

}
