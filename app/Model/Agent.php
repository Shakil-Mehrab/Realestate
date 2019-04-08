<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Agent extends Model
{
    public function user(){
    return $this->belongsTo('App\User');
  }
}
