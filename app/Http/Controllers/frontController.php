<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Model\Property;
use App\Comment;
use App\Model\Category;
use App\Model\Agent;
use App\Like;

use Session;
session_start();

class frontController extends Controller
{

      public function rating(){
        return view("front.page.rating");
    } 

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
        $most_popular_properties=Property::orderBY('views','desc')->limit(2)->get();
        //Recent Property                 
        $recent_slide_properties=Property::orderBY('id','desc')->limit(6)->get();
        //recent mid Property
        $recent_slide_properties_four=Property::orderBY('id','desc')->limit(7)->get();
        if($recent_slide_properties_four){
            foreach ($recent_slide_properties_four as $recent_slide_propertie_four) {
               $recent_slide_last_id=$recent_slide_propertie_four->id;
            }
        }
        $recent_mid_property=Property::find($recent_slide_last_id);
        //last property
        $recent_last_properties=Property::orderBY('id','desc')->limit(1)->get();
        //Popular Property
        $popular_first_three_properties=Property::orderBY('views','desc')->limit(3)->get();
        //Poppular small
        $recent_slide_properties_four=Property::orderBY('views','desc')->limit(4)->get();
        if($recent_slide_properties_four){
            foreach ($recent_slide_properties_four as $recent_slide_propertie_four) {
               $recent_slide_last_id=$recent_slide_propertie_four->views;
            }
        }
        $popular_properties_small=Property::orderBY('views','desc')->where('views','<',$recent_slide_last_id)->limit(4)->get();
        //Agent
        $agents_link=Agent::orderBY('id','desc')->limit(4)->get();
        $agents=Agent::orderBY('id','desc')->limit(6)->get();
        $categories=Category::orderBY('id','desc')->limit(6)->get();
        $select_properties=Property::all();

        return view('front.page.index-1',compact(['most_popular_properties','recent_slide_properties','recent_mid_property','recent_last_properties','popular_first_three_properties','popular_properties_small','agents_link','agents','categories','select_properties','recent_slide_last_id']));
        }
    	
     public function getHeaderTwo(){
    	      $most_popular_properties=Property::orderBY('views','desc')->limit(2)->get();
        //Recent Property                 
        $recent_slide_properties=Property::orderBY('id','desc')->limit(6)->get();
        //recent mid Property
        $recent_slide_properties_four=Property::orderBY('id','desc')->limit(7)->get();
        if($recent_slide_properties_four){
            foreach ($recent_slide_properties_four as $recent_slide_propertie_four) {
               $recent_slide_last_id=$recent_slide_propertie_four->id;
            }
        }
        $recent_mid_property=Property::find($recent_slide_last_id);
        //last property
        $recent_last_properties=Property::orderBY('id','desc')->limit(1)->get();
        //Popular Property
        $popular_first_three_properties=Property::orderBY('views','desc')->limit(3)->get();
        //Poppular small
        $recent_slide_properties_four=Property::orderBY('views','desc')->limit(4)->get();
        if($recent_slide_properties_four){
            foreach ($recent_slide_properties_four as $recent_slide_propertie_four) {
               $recent_slide_last_id=$recent_slide_propertie_four->views;
            }
        }
        $popular_properties_small=Property::orderBY('views','desc')->where('views','<',$recent_slide_last_id)->limit(4)->get();
        //Agent
        $agents_link=Agent::orderBY('id','desc')->limit(4)->get();
        $agents=Agent::orderBY('id','desc')->limit(6)->get();
        $categories=Category::orderBY('id','desc')->limit(6)->get();
        $select_properties=Property::all();

        return view('front.page.index-2',compact(['most_popular_properties','recent_slide_properties','recent_mid_property','recent_last_properties','popular_first_three_properties','popular_properties_small','agents_link','agents','categories','select_properties','recent_slide_last_id']));
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
 
     public function getAboutUs(){
        return view("front.page.about");
    }
     public function getFaqs(){
        return view("front.page.faq");
    }
     public function getTestimonials(){
        return view("front.page.testimonial");
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



    //showing Page
    public function welcome()
     {     
            
        $most_popular_properties=Property::orderBY('views','desc')->limit(2)->get();
        //Recent Property                 
        $recent_slide_properties=Property::orderBY('id','desc')->limit(6)->get();
        //recent mid Property
        $recent_slide_properties_four=Property::orderBY('id','desc')->limit(7)->get();
        if($recent_slide_properties_four){
            foreach ($recent_slide_properties_four as $recent_slide_propertie_four) {
               $recent_slide_last_id=$recent_slide_propertie_four->id;
            }
        }
        $recent_mid_property=Property::find($recent_slide_last_id);
        //last property
        $recent_last_properties=Property::orderBY('id','desc')->limit(1)->get();
        //Popular Property
        $popular_first_three_properties=Property::orderBY('views','desc')->limit(3)->get();
        //Poppular small
        $recent_slide_properties_four=Property::orderBY('views','desc')->limit(4)->get();
        if($recent_slide_properties_four){
            foreach ($recent_slide_properties_four as $recent_slide_propertie_four) {
               $recent_slide_last_id=$recent_slide_propertie_four->views;
            }
        }
        $popular_properties_small=Property::orderBY('views','desc')->where('views','<',$recent_slide_last_id)->limit(4)->get();
        //Agent
        $agents_link=Agent::orderBY('id','desc')->limit(4)->get();
        $agents=Agent::orderBY('id','desc')->limit(6)->get();
        $categories=Category::orderBY('id','desc')->limit(6)->get();
        $select_properties=Property::all();

        return view('welcome',compact(['most_popular_properties','recent_slide_properties','recent_mid_property','recent_last_properties','popular_first_three_properties','popular_properties_small','agents_link','agents','categories','select_properties','recent_slide_last_id']));
        }
     
    
    public function postTargetPropertySearch(Request $request)
     {     
      $this->validate($request,[            

     ]);
     $country=$request['country'];
     $state=$request['state'];
     $address=$request['address'];
     $status=$request['status'];
     $category=$request['category'];
     $location=$request['location'];

        $all_popular_properties=Property::orderBY('views','desc')->where('country','like','%'. $country .'%')->where('state','like','%'. $state .'%')->where('address','like','%'. $address .'%')->where('status','like','%'. $status .'%')->where('property_type','like','%'. $category .'%')->where('location','like','%'. $location .'%')->limit(20)->get();
        //Recent Property                 
        $recent_slide_properties=Property::orderBY('id','desc')->limit(3)->get();
        $recent_slide_lower_properties=Property::orderBY('id','desc')->limit(1)->get();

         $recent_slide_properties_id=Session::get('slide_property_id');
        $second_recent_slide_properties=Property::orderBY('id','desc')->limit(3)->get();
        $second_recent_slide_lower_properties=Property::orderBY('id','desc')->limit(1)->get();


        $second_recent_slide_properties_id=Session::get('second_recent_slide_property_id');
        $recent_mid_properties=Property::orderBY('id','desc')->limit(2)->get();

        $second_recent_slide_properties_id=Session::get('second_recent_slide_properties_id');
        $recent_last_properties=Property::orderBY('id','desc')->limit(2)->get();
        //Popular Property
        $popular_properties=Property::orderBY('views','desc')->limit(3)->get();

        $popular_first_three_viwes=Session::get('popular_first_three_viwes');
        $popular_properties_small=Property::orderBY('views','desc')->limit(4)->get();
        //Agent
        $agents_link=Agent::orderBY('id','desc')->limit(4)->get();
        $agents=Agent::orderBY('id','desc')->limit(6)->get();
        $categories=Category::orderBY('id','desc')->limit(6)->get();



        return view('front.page.search-property',compact(['all_popular_properties','recent_slide_properties','recent_slide_lower_properties','second_recent_slide_properties','second_recent_slide_lower_properties','recent_mid_properties','recent_last_properties','popular_properties','popular_properties_small','agents_link','agents','popular_first_three_id','categories']));
    }  

}
