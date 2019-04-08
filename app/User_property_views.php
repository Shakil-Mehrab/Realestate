<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_property_views extends Model
{
    public function property(){
        return $this->belongsTo('App\Model\Property');
    }
}
