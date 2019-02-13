<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NewPostNotify;
use App\Model\Property;
use App\Model\Agent;
use App\Model\Media;
use App\Subscriber;




class AdminController extends Controller
{

   public function getBookings(){
        return view("admin.bookings");
    }
     public function getFavouritedProperties(){
        return view("admin.my-properties");
    }
     public function getMessage(){
        return view("admin.message");
    }
     public function getMyInvoices(){
        return view("admin.my-invoices");
    }
     public function getMyProfile(){
        return view("admin.my-profile");
    }
     public function getMyProperties(){
        return view("admin.my-properties");
    }
     public function getPropertyInput(){
        return view("admin.submit-property");
    }
   
     public function postSubmitProperty(Request $request){
            $subscribers=Subscriber::all();

            $submit_properties=new Property();
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
            $checkbox_stirng=implode($checkbox_array);
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
              $request->user()->properties()->save($submit_properties);
            }
         }
        $request->user()->properties()->save($submit_properties);
         foreach($subscribers as $subscriber){
            Notification::route('mail', $subscriber->email)->notify(new  NewPostNotify($submit_properties));
        }
        return redirect()->back()->withMessage('Property submitted  succesfully');
    }

}
