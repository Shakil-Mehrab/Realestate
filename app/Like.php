<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Model\Property;

class Like extends Model
{
     public function property(){
        return $this->belongsTo(Property::class);
    }
}
