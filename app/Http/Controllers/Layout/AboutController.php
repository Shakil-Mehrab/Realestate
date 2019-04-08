<?php

namespace App\Http\Controllers\Layout;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
     public function getFaqs(){
        return view("front.page.about.faq");
    }
     public function getTestimonials(){
        return view("front.page.about.testimonial");
    }
}
