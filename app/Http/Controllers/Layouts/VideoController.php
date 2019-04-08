<?php

namespace App\Http\Controllers\Layouts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreVideoFormRequest;
use App\Model\Video;
use App\Model\Property;
use Illuminate\Support\Facades\Auth;

class VideoController extends Controller
{
  public function postSubmitVideo(StoreVideoFormRequest $request,$property_id){
      $roperty=Property::find($property_id);
      $video_exist=Video::where('property_id',$property_id)->first();
      if($video_exist){
        $video_exist->link=$request['link'];
          if(Auth::user()==$roperty->user){
            $video_exist->update();
            return redirect()->back()->withSuccess('Video Updated Succesfully');
          }
     }
     else{
        $submit_link=new Video();        
        $submit_link->link=$request['link'];
        $submit_link->property_id=$property_id;
          if(Auth::user()==$roperty->user){
            $request->user()->videos()->save($submit_link);
            return redirect()->back()->withSuccess('Video Uploaded Succesfully');
     }
  }
  return redirect()->back()->withError('You Are Not Authorized');
}
    public function getAllVideos(){
      $recent_tops=Video::orderBY('id','desc')->limit(1)->get();
      $all_videos=Video::orderBY('created_at','desc')->paginate(9);

  	return view("front.page.index.videos",compact(['recent_tops','all_videos']));
  }
}


