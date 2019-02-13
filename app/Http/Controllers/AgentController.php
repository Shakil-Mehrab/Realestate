<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Agent;
use Session;
session_start();

class AgentController extends Controller
{
public function getAgent(){
    $top_agents=Agent::orderBY('id','desc')->limit(1)->get();
    $agent_id=Session::get('agent_id');
    $agent_last_two=Agent::orderBY('id','desc')->where('id','!> and =',$agent_id)->limit(2)->get();
    $all_agents=Agent::orderBY('id','desc')->get();
    return view("front.page.about",compact(['top_agents','all_agents']));
    }
public function getAgentDetail($agent_id){
    $single_agent=Agent::find($agent_id);
    $all_agents=Agent::orderBY('id','desc')->get();
    return view("front.page.agent-detail",compact(['single_agent','all_agents']));
    }
public function getCreateAgent(){
    return view("admin.create-agent");
    }
public function postSubmitAgent(Request $request){
        $agent=new Agent();
        $agent->name=$request['name'];
        $agent->email=$request['email'];
        $agent->phone=$request['phone'];
        $agent->detail=$request['detail'];
        $agent->address=$request['address'];       
        $image=$request->file("image"); 

     if($image){
         $image_full_name=$image->getClientOriginalName();
         $upload_path="images/";
         $image_url=$upload_path.$image_full_name;
         $success=$image->move($upload_path,$image_full_name);
        if($success){
          $agent->image=$image_url;
          $request->user()->agents()->save($agent);
          return redirect()->back()->withMessage('Agent Created succesfully');
        }
    }
    $request->user()->agents()->save($agent);
    return redirect()->back()->withMessage('Agent Created Not succesfull');
  }
}
