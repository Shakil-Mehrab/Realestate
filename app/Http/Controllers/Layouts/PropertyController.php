<?php

namespace App\Http\Controllers\Layouts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePropertyFormRequest;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NewPostNotify;
use App\Model\Property;
use App\Comment;
use App\Subscriber;
use Illuminate\Support\Facades\Auth;


class PropertyController extends Controller
{
    public function crate(){
        return view("admin.input-property.submit-property");
    }
   
     public function store(StorePropertyFormRequest $request){
            $subscribers=Subscriber::all();

            $submit_properties=new Property();
            $submit_properties->title=$request['title'];
            $submit_properties->property_type=$request['property_type'];
            $submit_properties->category_id=$request['category_id'];
            $submit_properties->area=$request['area'];
            $submit_properties->address=$request['address'];
            $submit_properties->price=$request['price'];
            $submit_properties->detail=$request['detail'];
            // $checkbox_array=$request['checkbox'];
            // if($checkbox_array){
            // $checkbox_stirng=implode($checkbox_array);
            // $submit_properties->checkbox=$checkbox_stirng;
            // }
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
              $request->user()->properties()->save($submit_properties);
            }
         }
        $request->user()->properties()->save($submit_properties);
         foreach($subscribers as $subscriber){
            Notification::route('mail', $subscriber->email)->notify(new  NewPostNotify($submit_properties));
        }
        return redirect()->back()->withSuccess('Property submitted  succesfully');
    }
    public function getEditProperty($edit_id){
        $property=Property::find($edit_id);
        return view("admin.input-property.edit-property",compact(['property'])); 
       }
    public function postEditedProperty(StorePropertyFormRequest $request,$edit_id){
            $submit_properties=Property::find($edit_id);
            $submit_properties->title=$request['title'];
            $submit_properties->property_type=$request['property_type'];
            $submit_properties->category_id=$request['category_id'];
            $submit_properties->area=$request['area'];
            $submit_properties->address=$request['address'];
            $submit_properties->price=$request['price'];
            $submit_properties->detail=$request['detail'];
            // $checkbox_array=$request['checkbox'];
            // if($checkbox_array){
            // $checkbox_stirng=implode($checkbox_array);
            // $submit_properties->checkbox=$checkbox_stirng;
            // }
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
            }
         }
      if(Auth::user()==$submit_properties->user){
        $submit_properties->update();
        return redirect()->back()->withSuccess('Property Updated  succesfully');
      }
        return redirect()->back()->withError('You Are Not Authorized');
    }
  public function getDeleteProperty(Request $request){
    $checkboxes=$request->checkboxes;
    if(!empty($checkboxes)){
      foreach($checkboxes as $chekbox_id){
        $property=Property::find($chekbox_id);
          if(Auth::user()==$property->user){
            $property->delete();
            }else{
              return redirect()->back()->withError('You Are Not Authorized');
          }
      }
        return redirect()->back()->withSuccess('Property Deleteed succesfully');
    }
      return redirect()->back()->withError('Please Select One');
   }
}

