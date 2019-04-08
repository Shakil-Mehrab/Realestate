<?php

namespace App\Http\Controllers\Layout;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommingSoonController extends Controller
{
    public function getCommingSoonProperty(){
        return view("front.page.coming-soon");
    }
}
