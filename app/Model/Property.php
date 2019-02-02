<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Review;
use App\Model\Category;
use App\Like;
use App\User;



class Property extends Model
{

      public function reviews(){
        return $this->hasMany(Review::class);
    }
     public function user(){
        return $this->belongsTo(User::class);
    }
      public function category(){
        return $this->belongsTo(Category::class);
    }
      public function likes(){
        return $this->hasMany(Like::class);
    }
}
