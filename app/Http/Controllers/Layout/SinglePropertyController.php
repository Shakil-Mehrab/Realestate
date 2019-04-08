<?php

namespace App\Http\Controllers\Layout;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jobs\UserViwedNews;
use App\Model\Property;

class SinglePropertyController extends Controller
{
     public function getpropertyMoreDetail(Request $request,$detail_id)
    {       
        $new=Property::find($detail_id);
         if($request->user()){
           dispatch(new UserViwedNews($request->user(),$new));  
        }

        $single_property=Property::find($detail_id);

         return view('front.page.single.property-detail',compact(['single_property'])); 
    }  

}
