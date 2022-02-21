<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
//use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;
/*use Illuminate\Support\Facades\Storage;
use Image;*/

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'fullname',
        'email',
        'password'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function addresses()
    {
        return $this->hasOne(Address::class);
    }

    public function merchant()
    {
        return $this->hasOne(Merchant::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function verifications()
    {
        return $this->hasMany(Verification::class);
    }

    /*public static function uploadAvatar($image)
    {
        $filename = $image->getClientOriginalName();

        (new self())->deleteOldImage();

        $image->storeAs('uploads', $filename, 'public');

        auth()->user()->update(['profile_picture' => $filename]);

    }

    protected function deleteOldImage()
    {
      if ($this->profile_picture) {
        Storage::delete('/public/uploads/'.$this->profile_picture);
      }
    }*/
}
