<?php

namespace App\Http\Controllers\Layouts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMediaFormRequest;
use Illuminate\Support\Facades\Auth;
use App\Model\Media;
use App\Model\Video;
use App\Model\Property;


class MediaController extends Controller
{
 public function postSubmItimages(StoreMediaFormRequest $request,$property_id){
   $roperty=Property::find($property_id);
    if(Auth::user()==$roperty->user){
        $images=$request->file("image"); 
          if(count($images)>0){
              foreach($images as $image){
              //  $image_name=str_random(20);
                //  $ext=strtolower($image->getclientoriginalExtension());
              // $image_full_name=$image_name.".".$ext;
               $image_full_name=$image->getClientOriginalName();
               $upload_path="images/";
               $image_url=$upload_path.$image_full_name;
               $success=$image->move($upload_path,$image_full_name);
                if($success){
                  $storage=new Media();
                  $storage->property_id=$property_id;
                  $storage->image=$image_url;
                  $request->user()->media()->save($storage);
                }
              }
          }
    return redirect()->back()->withSuccess('Images Uploaded succesfully');
    }
    return redirect()->back()->withError('You Are Not Authorized');
  }
}
 