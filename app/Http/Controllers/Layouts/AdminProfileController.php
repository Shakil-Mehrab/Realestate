<?php

namespace App\Http\Controllers\Layouts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminProfileController extends Controller
{
       public function getMyProperties(){
        return view("admin.my-properties");
    }
}
