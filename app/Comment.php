<?php

namespace App;
use App\Model\LIke;
use App\Comment;
use App\Model\Reply;
use App\Model\Property;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	 protected $fillable=['property_id','user_id','star','body'];
    public function property()
	{	
	 return $this->belongsTo(Property::class);
    }
    public function likes()
	{	
	 return $this->hasMany(Like::class);
    }
   
    public function replies()
	{	
	 return $this->hasMany(Reply::class);
	}
	 public function countreplies()
	{	
	 	$totla_replies=$this->replies()->count();
	     if(empty($totla_replies)){
	      return 1;
	    }
	    return $totla_replies;
	}
    public function user()
	{	
	 return $this->belongsTo(User::class);
	}
}
