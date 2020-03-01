<?php

namespace App;

use App\Models\Product;
use App\Models\Role;
use App\Models\Userdetails;
use App\Models\UserImage;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public  function roles()
    {
        return $this->belongsTo(Role::class);
    }

    public  function product()
    {
        return $this->hasMany(Product::class);
    }
    public function userdetails()
    {
        return $this->hasOne(Userdetails::class);
    }
    public function userimage()
    {
        return $this->hasOne(UserImage::class);
    }
}
