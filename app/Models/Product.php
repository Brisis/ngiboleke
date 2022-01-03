<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'collection_id',
        'description',
        'SKU',
        'price',
        'discount_percent',
        'stock',
        'stock_left',
        'slug',
        'video'
    ];

    public function category()
    {
      return $this->belongsTo(Category::class);
    }

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function collection()
    {
      return $this->belongsTo(Collection::class);
    }

    public function images()
    {
      return $this->hasMany(ProductImage::class);
    }

    public function rentals()
    {
      return $this->hasOne(ProductRental::class);
    }

    public function promotions()
    {
      return $this->hasOne(ProductPromotion::class);
    }

    public function colors()
    {
      return $this->hasMany(ProductColor::class);
    }

    public function reviews()
    {
      return $this->hasMany(Review::class);
    }
}
