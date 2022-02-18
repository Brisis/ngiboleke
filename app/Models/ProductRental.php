<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductRental extends Model
{
    use HasFactory;

    protected $fillable = [
      'period',
      'percentage',
      'policy',
    ];

    public function product()
    {
      return $this->belongsTo(Product::class);
    }
}
