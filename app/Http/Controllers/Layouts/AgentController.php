<?php

namespace App\Http\Controllers\Layouts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAgentFormRequest;
use App\Model\Agent;
use App\Model\Property;
use Illuminate\Support\Facades\Auth;

class AgentController extends Controller
{
   public function Index(){
    $agents=Agent::orderBY('id','desc')->get();
    return view("super-admin.agents.index",compact(['agents']));
    }
  public function getAgent(){
    $top_agents=Agent::orderBY('id','desc')->limit(1)->get();
    $all_agents=Agent::orderBY('id','desc')->get();
    return view("front.page.about.about",compact(['top_agents','all_agents']));
    }
  public function getAgentDetail($agent_id){
      $single_agent=Agent::find($agent_id);
      $all_agents=Agent::orderBY('id','desc')->get();
      return view("front.page.about.agent-detail",compact(['single_agent','all_agents']));
      }
  public function create(){
      $agents=Agent::all();
      return view("super-admin.agents.create",compact('agents'));
      }
  public function store(StoreAgentFormRequest $request){
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
          }
      }
      $request->user()->agents()->save($agent);
      return redirect()->back()->withSuccess('Agent Created succesfull');
    }
    public function edit($agent_id){
      $agent=Agent::find($agent_id);
      return view("super-admin.agents.edit",compact('agent'));
      }
  public function update(StoreAgentFormRequest $request,$agent_id){
          $agent=Agent::find($agent_id);
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
          }
      }
      if(Auth::user()==$agent->user){
        $agent->update();
        return redirect()->back()->withSuccess('Agent update succesfull');
      }
        return redirect()->back()->withError('You Are Not Authorized');
    }
    public function delete(Request $request){
    $checkboxes=$request->checkboxes;
    if(!empty($checkboxes)){
      foreach($checkboxes as $chekbox_id){
        $property=Agent::find($chekbox_id);
          if(Auth::user()==$property->user){
            $property->delete();
          }else{
              return redirect()->back()->withError('You Are Not Authorized');
          }
      }
        return redirect()->back()->withSuccess('Agnet Deleteed succesfully');
    }
      return redirect()->back()->withError('Please Select One');
   }
}


