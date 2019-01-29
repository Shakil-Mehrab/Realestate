<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Submit_property;

class frontController extends Controller
{
      public function getPropertyInput(){
        return view("admin.submit-property");
    }
     public function getDashboard(){
        return view("admin.dashboard");
    }
       public function getCommingSoonProperty(){
        return view("front.page.coming-soon");
    }

    public function getHeaderOne(){
    	return view("front.page.index-1");
    }
     public function getHeaderTwo(){
    	return view("front.page.index-2");
    }
     public function getHeaderThree(){
    	return view("front.page.index-3");
    }
     public function getHeaderFour(){
    	return view("front.page.index-4");
    }
     public function getHeaderFive(){
    	return view("front.page.index-5");
    }
     public function getHeaderSix(){
    	return view("front.page.index-6");
    }
     public function getAboutUs(){
        return view("front.page.about");
    }
     public function getFaqs(){
        return view("front.page.faq");
    }
     public function getTestimonials(){
        return view("front.page.testimonial");
    }
     public function getAgent(){
        return view("front.page.about");
    }
     public function getAgentDetail(){
        return view("front.page.agent-detail");
    }
      public function getProperties(){
        return view("front.page.properties");
    }
     public function getPropertyListView(){
        return view("front.page.property-list-view");
    }
     public function getPropertyGridView(){
        return view("front.page.property-grid-view");
    }
     public function getPropertyModernView(){
        return view("front.page.property-modern-view");
    }
     public function getpropertyDetail(){
        return view("front.page.property-detail");
    }
     public function getBlogDefault(){
        return view("front.page.blog");
    }
     public function getBlogListView(){
        return view("front.page.blog-list");
    }
     public function getBlogyGridView(){
        return view("front.page.blog-grid");
    }
     public function getBlogDetail(){
        return view("front.page.blog-detail");
    }
    public function getContact(){
        return view("front.page.contact");
    }

    //Admin
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
     public function getSubmitProperty(){
        return view("admin.submit-property");
    }
       public function postSubmitProperty(Request $request){

        $this->validate($request,[
            "title"=>"required", 
            "property_type"=>"required", 
            "country"=>"required", 
            "status"=>"required", 
            "area"=>"required", 
            "nong_of_kitchen"=>"required", 
            "nong_of_bedroom"=>"required", 
            "nong_of_bathroom"=>"required", 
            "address"=>"required", 
            "state"=>"required", 
            "postal_code"=>"required",
            "detail"=>"required", 
            "name"=>"required",             
            "email"=>"required", 
            "phone"=>"required|max:11",  
         ]);
            $submit_properties=new Submit_property();
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
            $submit_properties->postal_code=$request['postal_code'];
            $submit_properties->detail=$request['detail'];

            $checkbox_array=$request['checkbox'];
            $checkbox_stirng=implode(",",$checkbox_array);
            $submit_properties->checkbox=$checkbox_stirng;

            $submit_properties->name=$request['name'];
            $submit_properties->email=$request['email']; 
            $submit_properties->phone=$request['phone'];          
            $image=$request->file("image"); 

         if($image){
              //  $image_name=str_random(20);
              //  $ext=strtolower($image->getclientoriginalExtension());
            // $image_full_name=$image_name.".".$ext;
            $image_full_name=$image->getClientOriginalName();
             $upload_path="images/";
             $image_url=$upload_path.$image_full_name;
             $success=$image->move($upload_path,$image_full_name);
            if($success){
              $submit_properties->image=$image_url;
              $submit_properties->save();
              return redirect()->back()->withMessage('Property submitted succesfully');
            }
        }
        $submit_properties->save();
        return redirect()->back()->withMessage('Property submitted Not succesfully');
    }

}
