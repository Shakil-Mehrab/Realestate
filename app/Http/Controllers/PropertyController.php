<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Property;
use App\Model\Video;
use App\Model\Media;
use App\Comment;
use Session;
session_start();

class PropertyController extends Controller
{
    public function getAllProperty()
    {
        $all_popular_properties=Property::orderBY('created_at','desc')->paginate(3);
        return view('front.page.all-popular-property',compact(['all_popular_properties']));
    }
     public function getAllPoplarProperty()
    {
        $all_popular_properties=Property::orderBY('views','desc')->paginate(3);
        return view('front.page.all-popular-property',compact(['all_popular_properties']));
    }
     public function getpropertyMoreDetail($detail_id)
    {       
        $property=Property::find($detail_id);
        $property->views=$property->views+1;
        $property->update();

        $video=Video::where('property_id',$detail_id)->first();
        $media_properties=Media::orderBY('id','desc')->where('property_id',$detail_id)->limit(6)->get();
        $recent_properties=Property::orderBY('id','desc')->limit(6)->get();
        $popular_properties=Property::orderBY('views','desc')->limit(6)->get();
        $single_detail=Property::orderBY('id','desc')->limit(6)->get();
        $single_property=Property::find($detail_id);
        $comments=Comment::orderBY('id','desc')->where('property_id',$detail_id)->get();


        $total_comment=$single_property->comments()->count();
        $total_star=$single_property->comments()->sum('star');
        if($total_comment){
            foreach ($comments as $comment) {
              $total_comment=$total_comment+$comment->replies()->count();
              $total_star=$total_star+$comment->replies()->sum('star');      
            }
            $star_rating=round($total_star/$total_comment);

        }else{$star_rating=0;}

         return view('front.page.property-detail',compact(['single_detail','single_property','comments','recent_properties','total_comment','total_star','star_rating','video','popular_properties','media_properties'])); 
    }  

   

}
