<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Comment;
use App\Model\Property;
use App\User;



class Reply extends Model
{
     public function property(){
        return $this->belongsTo(Property::class);
    }
      public function comment(){
        return $this->belongsTo(Comment::class);
    }
       public function User(){
        return $this->belongsTo(User::class);
    }
}
