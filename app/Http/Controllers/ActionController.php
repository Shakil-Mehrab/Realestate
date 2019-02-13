<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Property;
use App\Comment;


class ActionController extends Controller
{
    public function getViewProperty($detail_id){
        $properties=Property::orderBY('id','desc')->limit(6)->get();
        $single_detail=Property::orderBY('id','desc')->limit(6)->get();
        $single_property=Property::find($detail_id);
        $comments=Comment::orderBY('id','desc')->limit(2)->get();
        return view('front.page.property-detail',compact(['single_detail','single_property','comments','properties'])); 
  }
   public function getEditProperty($edit_id){
        $property=Property::find($edit_id);
 
        return view("admin.action.property-edit",compact(['property'])); 
       
  }
   public function postEditedProperty(Request $request,$edit_id){
            $submit_properties=Property::find($edit_id);
            $submit_properties->title=$request['title'];
            $submit_properties->property_type=$request['property_type'];
            $submit_properties->country=$request['country'];
            $submit_properties->status=$request['status'];
            $submit_properties->area=$request['area'];
            $submit_properties->nong_of_kitchen=$request['nong_of_kitchen'];
            $submit_properties->nong_of_bedroom=$request['nong_of_bedroom'];
            $submit_properties->nong_of_bathroom=$request['nong_of_bathroom'];
            $submit_properties->address=$request['address'];
            $submit_properties->state=$request['state'];
            $submit_properties->nong_of_gourage=$request['nong_of_gourage'];
            $submit_properties->price=$request['price'];
            $submit_properties->location=$request['location'];
            $submit_properties->detail=$request['detail'];
            $checkbox_array=$request['checkbox'];
         if($checkbox_array){
            $checkbox_stirng=implode(",",$checkbox_array);
            $submit_properties->checkbox=$checkbox_stirng;
         }
            $submit_properties->name=$request['name'];
            $submit_properties->email=$request['email']; 
            $submit_properties->phone=$request['phone'];          
            $image=$request->file("image");
     if($image){
            $image_full_name=$image->getClientOriginalName();
             $upload_path="images/";
             $image_url=$upload_path.$image_full_name;
             $success=$image->move($upload_path,$image_full_name);
            if($success){
              $submit_properties->image=$image_url;
              $submit_properties->update();
            }
         }

        $submit_properties->update();
        return redirect()->back()->withMessage('Property Updated  succesfully');
    }
  public function getDeleteProperty($delete_id){
      $property=Property::find($delete_id);
      $property->delete();
      return redirect()->back()->withMessage('Property Deleteed succesfully');

   }
}