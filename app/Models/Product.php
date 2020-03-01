<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{



    public function getRouteKeyName()
    {
     return 'slug';
    }

    public function images(){
        return $this->hasMany(Image::class);
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function status(){
        return $this->belongsTo(Status::class,'status_id');
    }

    public function condition()
    {
        return $this->belongsTo(Condition::class,'condition_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
    public function comment()
    {
        return $this->HasMany(ProductComment::class);
    }

}
