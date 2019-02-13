<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Video;
use App\Model\Property;


class VideoController extends Controller
{
  public function postSubmitVideo(Request $request,$property_id){

    $video_exist=Video::where('property_id',$property_id)->first();
    if($video_exist){
    $video_exist=Video::where('property_id',$property_id)->first();       
    $video_exist->link=$request['link'];
    $video_exist->update();
    return redirect()->back()->withMessage('Video Updated Succesfully');
   }
   else
   {
    $submit_link=new Video();        
    $submit_link->link=$request['link'];
    $submit_link->property_id=$property_id;
    $request->user()->videos()->save($submit_link);
    return redirect()->back()->withMessage('Video Uploaded Succesfully');
   }
    
  }
      public function getAllVideos(){
         $recent_tops=Video::orderBY('id','desc')->limit(1)->get();
        $all_videos=Video::orderBY('created_at','desc')->paginate(9);

    	return view("front.page.index-6",compact(['recent_tops','all_videos']));
    }
}
