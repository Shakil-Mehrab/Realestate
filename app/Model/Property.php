<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Comment;
use App\Model\Category;
use App\Like;
use App\Model\Reply;
use App\Model\Media;
use App\Model\Video;


class Property extends Model
{

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
  public function replies(){
    return $this->hasMany(Reply::class);
  }
  public function media(){
    return $this->hasMany(Media::class);
  }
    public function videos(){
    return $this->hasMany(Video::class);
  }
}
