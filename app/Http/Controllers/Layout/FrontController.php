<?php

namespace App\Http\Controllers\Layout;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\User_property_views;
use App\Model\Property;
use App\Model\Category;
use App\Model\Agent;
use App\Model\Video;
use App\Comment;
use App\Like;

class FrontController extends Controller
{
    //showing Page
    public function welcome(){     
        $popular_properties=User_property_views::orderBY('count','desc');              
        $properties=Property::orderBY('id','desc');
        $agents=Agent::orderBY('id','desc');
        $categories=Category::orderBY('id','desc')->limit(6)->get();
        $videos=Video::orderBY('id','desc')->limit(1)->get();
        return view('welcome',compact(['popular_properties','properties','agents','categories','videos']));
    }
    public function getHeaderOne(){
        $popular_properties=User_property_views::orderBY('count','desc');              
        $properties=Property::orderBY('id','desc');
        $agents=Agent::orderBY('id','desc');
        $categories=Category::orderBY('id','desc')->limit(6)->get();
        $videos=Video::orderBY('id','desc')->limit(1)->get();
        return view('front.page.index.index-1',compact(['popular_properties','properties','agents','categories','videos']));
        
    }	
     public function getHeaderTwo(){
    	 $popular_properties=User_property_views::orderBY('count','desc');              
        $properties=Property::orderBY('id','desc');
        $agents=Agent::orderBY('id','desc');
        $categories=Category::orderBY('id','desc')->limit(6)->get();
        $videos=Video::orderBY('id','desc')->limit(1)->get();
        return view('front.page.index.index-1',compact(['popular_properties','properties','agents','categories','videos']));
        
    }
     public function getHeaderThree(){
    	return view("front.page.index.index-3");
    }
     public function getHeaderFour(){
    	return view("front.page.index.index-4");
    }
     public function getHeaderFive(){
    	return view("front.page.index.index-5");
    }
 	    public function getAllProperty()
    {
        $agents=Agent::orderBY('id','desc');
        $properties=Property::orderBY('id','desc')->paginate(9);
        return view('front.page.properties.all-property',compact(['properties','agents']));
    }
     public function getAllPoplarProperty()
    {
        $agents=Agent::orderBY('id','desc');
        $properties=User_property_views::orderBY('count','desc')->paginate(9);
        return view('front.page.properties.all-popular-property',compact(['properties','agents']));
    } 
    
}

