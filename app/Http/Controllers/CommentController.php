<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\Property;
use App\Comment;
use App\Model\Reply;
use App\Model\Category;
use App\Notifications\RepliedToProperty;

class CommentController extends Controller
{
    public function postCommentStore(Request $request,$property_id)
    {
         $this->validate($request,[
            "star"=>"required",          
         ]);
       
         $property=Property::where('id',$property_id)->first();
         $review=new Comment();        
         $review->body=$request['body'];
         $review->star=$request['star'];   
         $review->property_id=$property_id;  
         $request->user()->comments()->save($review);
         $property->user->notify(new RepliedToProperty($property)); 

        return redirect()->back()->withMessage("Comment Created !");
    }
    public function getCommentShow($coment_id)
    {      
     $comment=Comment::find($coment_id);
     $property_id=$comment->property_id;

        $property=Property::find($property_id);
        $property->views=$property->views+1;
        $property->update();

        $properties=Property::orderBY('id','desc')->limit(6)->get();
        $single_detail=Property::orderBY('id','desc')->limit(6)->get();
        $single_property=Property::find($property_id);
        $comments=Comment::orderBY('id','desc')->where('property_id',$property_id)->get();


        $total_comment=$single_property->comments()->count();
        $total_star=$single_property->comments()->sum('star');
        if($comments){
            foreach ($comments as $comment) {
              $total_comment=$total_comment+$comment->replies()->count();
              $total_star=$total_star+$comment->replies()->sum('star');      
            }
        }
      $star_rating=round($total_star/$total_comment);

         return view('front.page.comment-show-with-property',compact(['single_detail','single_property','comments','properties','total_comment','total_star','star_rating'])); 
    }  


}
