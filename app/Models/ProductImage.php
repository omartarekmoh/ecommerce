<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductImage extends Model
{
    use HasFactory;
    
    public function imageable()
   {
      return $this->morphTo();
   }

   public function url()
   {
      return Storage::url($this->path);
   }
}
