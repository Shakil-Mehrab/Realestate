<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Property;

class Category extends Model
{
     public function properties(){
        return $this->hasMany(Property::class);
    }
}
