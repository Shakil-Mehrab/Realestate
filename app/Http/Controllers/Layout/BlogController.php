<?php

namespace App\Http\Controllers\Layout;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function getBlogDefault(){
        return view("front.page.blog.blog");
    }
     public function getBlogListView(){
        return view("front.page.blog.blog-list");
    }
     public function getBlogyGridView(){
        return view("front.page.blog.blog-grid");
    }
     public function getBlogDetail(){
        return view("front.page.blog.blog-detail");
    }
}
