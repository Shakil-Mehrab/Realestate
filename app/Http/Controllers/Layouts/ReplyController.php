<?php

namespace App\Http\Controllers\Layouts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Model\Property;
use App\Comment;
use App\Model\Reply;
use App\Model\Category;
use App\Notifications\RepliedToProperty;

class ReplyController extends Controller
{
     public function postReplyStore(Request $request)
    {
        $this->validate($request,[
        "star"=>"required:integer",
        "body"=>"required|max:100",    

     ]);
       auth()->user()->replyreview()->create($request->all());
       return back()->withSuccess("Thanks for your review");
    }
}
