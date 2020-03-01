<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::creating(function($role){

        });
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
