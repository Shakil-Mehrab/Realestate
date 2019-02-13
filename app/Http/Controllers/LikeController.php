<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Model\Property;
use App\Comment;
use App\Model\Category;
use App\Model\Agent;
use App\Like;

class LikeController extends Controller
{

public function toggleLike(Request $request){
   $threadId=Input::get('threadId');
   $user_like=Like::where('user_id',auth()->id())
                  ->where('property_id',$threadId)->first();
   if($user_like){
    $like=Like::where('user_id',auth()->id())
                  ->where('property_id',$threadId)->first();
    $like->delete();
    return response()->json(['status'=>'success','message'=>'unliked']);
   }
   else
   {
      $like=new Like();
      $like->property_id=$threadId;
      $request->user()->likes()->save($like);     
      return response()->json(['status'=>'success','message'=>'liked']);
   }
 
  }
}
