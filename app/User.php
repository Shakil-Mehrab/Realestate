<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Model\Property;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
   public function categories(){
        return $this->hasMany('App\Category');
    }
    public function properties()
    {   
     return $this->hasMany('App\Model\Property');
    }
    public function likes()
    {   
     return $this->hasMany('App\Like');
    }
    public function comments()
    {   
     return $this->hasMany('App\Comment');
    }
     public function review(){
        return $this->hasOne('App\Comment');
    }
    public function replyreview(){
        return $this->hasOne('App\Model\Reply');
    }
    public function replies()
    {   
     return $this->hasMany('App\Model\Reply');
    }
      public function agents()
    {   
     return $this->hasMany('App\Model\Agent');
    }
       public function videos()
    {   
     return $this->hasMany('App\Model\Video');
    }
       public function media()
    {   
     return $this->hasMany('App\Model\Media');
    }
    public function viewedListings(){
       return $this->belongsToMany(Property::class ,'user_property_views')->withTimestamps()->withPivot(['count','id']);
    } 
 
}
