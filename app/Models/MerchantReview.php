<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MerchantReview extends Model
{
    use HasFactory;

    protected $fillable = [
      'user_id',
      'description',
      'rating'
    ];

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function merchant()
    {
      return $this->belongsTo(Merchant::class);
    }
}
