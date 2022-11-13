<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
    use HasFactory;
    protected $fillable = ['value', 'product_attribute_id', 'product_id'];

    public function product()
   {
      return $this->belongsTo(Product::class);
   }

   public function productAttribute()
   {
      return $this->belongsTo(ProductAttribute::class);
   }
}
