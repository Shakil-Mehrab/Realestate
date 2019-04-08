<?php

namespace App\Http\Controllers\Layout;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PropertyController extends Controller
{
    public function getProperties(){
        return view("front.page.properties");
    }
     public function getPropertyListView(){
        return view("front.page.properties.property-list-view");
    }
     public function getPropertyGridView(){
        return view("front.page.properties.property-grid-view");
    }
     public function getPropertyModernView(){
        return view("front.page.properties.property-modern-view");
    }
     
}
