<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Model\Property;
use App\Model\Review;
use App\Model\Agent;
use App\Like;

use Session;
session_start();

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
        $top_agents=Agent::orderBY('id','desc')->limit(1)->get();
        $agent_id=Session::get('agent_id');
        $agent_last_two=Agent::orderBY('id','desc')->where('id','!> and =',$agent_id)->limit(2)->get();
        return view("front.page.agent-detail",compact(['top_agents','agent_last_two']));
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



    //showing Page
    public function welcome()
    {                  
        $most_popular_properties=Property::orderBY('views','desc')->limit(2)->get();
        //Recent Property                 
        $recent_slide_properties=Property::orderBY('id','desc')->limit(3)->get();
        $recent_slide_lower_properties=Property::orderBY('id','desc')->limit(1)->get();

         $recent_slide_properties_id=Session::get('slide_property_id');
        $second_recent_slide_properties=Property::orderBY('id','desc')->where('id','<',$recent_slide_properties_id)->limit(3)->get();
        $second_recent_slide_lower_properties=Property::orderBY('id','desc')->where('id','<',$recent_slide_properties_id)->limit(1)->get();


        $second_recent_slide_properties_id=Session::get('second_recent_slide_property_id');
        $recent_mid_properties=Property::orderBY('id','desc')->where('id','<=',$recent_slide_properties_id)->limit(2)->get();

        $second_recent_slide_properties_id=Session::get('second_recent_slide_properties_id');
        $recent_last_properties=Property::orderBY('id','desc')->limit(2)->get();
        //Popular Property
        $popular_properties=Property::orderBY('views','desc')->limit(3)->get();

        $popular_first_three_viwes=Session::get('popular_first_three_viwes');
        $popular_properties_small=Property::orderBY('views','desc')->where('views','!> and =',$popular_first_three_viwes)->limit(4)->get();
        //Agent
        $agents_link=Agent::orderBY('id','desc')->limit(4)->get();
        $agents=Agent::orderBY('id','desc')->limit(6)->get();


        return view('welcome',compact(['most_popular_properties','recent_slide_properties','recent_slide_lower_properties','second_recent_slide_properties','second_recent_slide_lower_properties','recent_mid_properties','recent_last_properties','popular_properties','popular_properties_small','agents_link','agents','popular_first_three_id']));
    }  
     public function getpropertyMoreDetail($id)
    {                  
        $property=Property::find($id)->first();
        $property->views=$property->views+1;
        $property->update();
        $properties=Property::orderBY('id','desc')->limit(5)->get();

        // $property=Property::orderBY('id','desc')->where('category_id',$new->category_id)->where('id','!=',$new->id)->limit(4)->get();
      return view('front.page.property-detail',compact(['property','properties'])); 
        // $most_popular_properties=Property::orderBY('views','desc')->limit(2)->get();
        // //Recent Property                 
        // $recent_slide_properties=Property::orderBY('id','desc')->limit(3)->get();
        // $recent_slide_lower_properties=Property::orderBY('id','desc')->limit(1)->get();

        //  $recent_slide_properties_id=Session::get('slide_property_id');
        // $second_recent_slide_properties=Property::orderBY('id','desc')->where('id','<',$recent_slide_properties_id)->limit(3)->get();
        // $second_recent_slide_lower_properties=Property::orderBY('id','desc')->where('id','<',$recent_slide_properties_id)->limit(1)->get();


        // $second_recent_slide_properties_id=Session::get('second_recent_slide_property_id');
        // $recent_mid_properties=Property::orderBY('id','desc')->where('id','<=',$recent_slide_properties_id)->limit(2)->get();

        // $second_recent_slide_properties_id=Session::get('second_recent_slide_properties_id');
        // $recent_last_properties=Property::orderBY('id','desc')->limit(2)->get();
        // //Popular Property
        // $popular_properties=Property::orderBY('views','desc')->limit(3)->get();

        // $popular_first_three_viwes=Session::get('popular_first_three_viwes');
        // $popular_properties_small=Property::orderBY('views','desc')->where('views','!> and =',$popular_first_three_viwes)->limit(4)->get();
        // //Agent
        // $agents_link=Agent::orderBY('id','desc')->limit(4)->get();
        // $agents=Agent::orderBY('id','desc')->limit(6)->get();


        // return view('front.all-property',compact(['most_popular_properties','recent_slide_properties','recent_slide_lower_properties','second_recent_slide_properties','second_recent_slide_lower_properties','recent_mid_properties','recent_last_properties','popular_properties','popular_properties_small','agents_link','agents','popular_first_three_id']));
    }  
     public function getAllProperty(){
        $all_properties=Property::orderBY('id','desc')->get();
        return view('front.all-property',compact(['all_properties']));
    } 
    public function getPopularProperties(){
        $all_popular_properties=Property::orderBY('views','desc')->limit(20)->get();
        return view('front.page.all-popular-property',compact(['all_popular_properties']));
    } 

   public function toggleLike(Request $request){
       $threadId=Input::get('threadId');
       $user_like=Like::where('user_id',auth()->id())
                      ->where('property_id',$threadId)->first();
       if($user_like){
        $like=Like::where('user_id',auth()->id())
                      ->where('property_id',$threadId)->first();
        $like->delete();
       
        return response()->json(['status'=>'success','message'=>'unliked']);
       }
       else{
          $like=new Like();
          $like->property_id=$threadId;
          $request->user()->likes()->save($like);
          
      return response()->json(['status'=>'success','message'=>'liked']);
   }
 
  }

}
