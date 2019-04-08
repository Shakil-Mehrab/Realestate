<?php

namespace App\Http\Controllers\Layout;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Subscriber;

class SubscriberController extends Controller
{
     public function postSubscriber(Request $request)
    {
         $subscriber=new Subscriber();        
         $subscriber->name=$request['name'];
         $subscriber->email=$request['email']; 
         $subscriber->phone_no=$request['phone_no']; 
         $subscriber->save();  
        return redirect()->back()->withSuccess("Thank You for Subscription");
    }
}