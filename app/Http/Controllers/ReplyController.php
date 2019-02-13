<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\Property;
use App\Comment;
use App\Model\Reply;
use App\Model\Category;
use App\Notifications\RepliedToProperty;

class ReplyController extends Controller
{
     public function postReplyStore(Request $request,$comment_id)
    {
         $this->validate($request,[
            "star"=>"required",          
         ]);
       
         $comment=Comment::where('id',$comment_id)->first();
         $review=new Reply();        
         $review->body=$request['body'];
         $review->star=$request['star'];   
         $review->comment_id=$comment_id;  
         $request->user()->replies()->save($review);
        return redirect()->back()->withMessage("Reply Created !");
    }
}
