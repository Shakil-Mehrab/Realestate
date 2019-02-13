<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        return redirect()->back()->withMessage("Thank You for Subscription");
    }
}
