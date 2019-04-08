<?php

namespace App\Http\Controllers\Layout;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Agent;

class AgentController extends Controller
{
     public function getAgent(){
    $agents=Agent::orderBY('id','desc')->limit(6)->get();
    return view("front.page.agents.agents",compact(['agents']));
    }
public function getAgentDetail($agent_id){
    $single_agent=Agent::find($agent_id);
    $all_agents=Agent::orderBY('id','desc')->get();
    return view("front.page.agents.agent-detail",compact(['single_agent','all_agents']));
    }    
}
