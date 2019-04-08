<?php

namespace App\Http\Controllers\Layouts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NewPostNotify;
use App\Http\Requests\StorePropertyFormRequest;
use App\Model\Property;
use App\Model\Agent;
use App\Model\Media;
use App\Subscriber;

class AdminController extends Controller
{
	public function getDashboard(){
        return view("admin.dashboard");
    }
    
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
     
}
