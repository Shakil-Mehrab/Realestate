<?php

namespace App\Http\Controllers\Layout;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
   public function getContact(){
        return view("front.page.contact.contact");
    } 

}
