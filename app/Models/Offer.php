<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Offer extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function product()
    {
      return $this->belongsTo(Product::class);
    }

    public function getStartDateAttribute($value)
    {
       return Carbon::parse($value)->format('Y-m-d');
    }
 
    public function getEndDateAttribute($value)
    {
       return Carbon::parse($value)->format('Y-m-d');
    }   
}
