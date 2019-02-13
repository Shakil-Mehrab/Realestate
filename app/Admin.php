<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\AdminResetPasswordNotification;

class Admin extends Authenticatable
{
    use Notifiable;
    protected $guard = "admin";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','job_title',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new AdminResetPasswordNotification($token));
    }
    
    public function categories(){
		return $this->hasMany('App\Model\Category');
    }
    public function properties()
	{	
	 return $this->hasMany('App\Model\Property');
    }
    public function likes()
	{	
	 return $this->hasMany(Like::class);
    }
    public function comments()
	{	
	 return $this->hasMany('App\Comment');

    }
    public function replies()
	{	
	 return $this->hasMany('App\Model\Reply');

	}
 

   
    
}



