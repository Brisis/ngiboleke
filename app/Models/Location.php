<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
      'country',
      'location_state',
      'city',
      'street',
      'map',
      'slug'
    ];

    public function products(){
      return $this->hasMany(Product::class);
    }
}
