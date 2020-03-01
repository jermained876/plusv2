<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Userdetails extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
