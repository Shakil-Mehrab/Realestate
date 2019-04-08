<?php

namespace App\Model;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use App\Comment;
use App\Model\Category;
use App\Like;
use App\Model\Reply;
use App\Model\Media;
use App\Model\Video;
use App\User;

class Property extends Model
{
  use Searchable;
  public function searchableAs()
    {
        return 'property';
    }
public function comments(){
    return $this->hasMany(Comment::class)->latest()->limit(2);
    
  }
  public function user(){
    return $this->belongsTo('App\User');
  }
public function category(){
    return $this->belongsTo(Category::class);
  }
public function likes(){
    return $this->hasMany(Like::class);
  }
  public function media(){
    return $this->hasMany(Media::class)->latest()->limit(6);
  }
    public function videos(){
    return $this->hasMany(Video::class);
  }
  public function video(){
    return $this->hasOne(Video::class);
  }
  public function getStarRating(){
  
    $count=$this->comments()->count('star');
    if(empty($count)){
      return 0;
    }
    $total_star=$this->comments()->sum('star');
    foreach ($this->comments() as $comment) {
          $count=$count+$comment->replies()->count();
          $total_star=$total_star+$comment->replies()->sum('star');      
        }
    
    $average=$total_star/$count;
    return $average;
  }
   public function toSearchableArray()
    {
        $listins = $this->toArray();
        $listins['created_at_human']=$this->created_at->diffForHumans();
        $listins['user']=$this->user;
        $listins['category']=$this->category;
        $listins['title']=$this->title;
        return $listins;
    }
     public function viewedUsers(){
       return $this->belongsToMany(User::class ,'user_property_views')->withTimestamps()->withPivot(['count']);
    } 
    public function views(){
       return $this->viewedUsers()->sum('count');
       
    }
    public function TotalComment(){
    $count=$this->comments()->count();
    if(empty($count)){
      return 0;
    }
    $total_star=$this->comments()->count();
    foreach ($this->comments() as $comment) {
          $total_star=$total_star+$comment->replies()->count('comment_id');      
        }
    return $total_star;
  }
}
