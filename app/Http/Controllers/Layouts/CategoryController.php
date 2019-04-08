<?php

namespace App\Http\Controllers\Layouts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryFormRequest;
use App\Model\Category;

class CategoryController extends Controller
{
    public function Index(){
	    $categories=Category::orderBY('id','desc')->get();
	    return view("super-admin.categories.index",compact(['categories']));
    }
  	public function getAgent(){
	    $top_agents=Category::orderBY('id','desc')->limit(1)->get();
	    $all_agents=Category::orderBY('id','desc')->get();
	    return view("front.page.about.about",compact(['top_agents','all_agents']));
    }
  	public function getAgentDetail($agent_id){
      $single_agent=Category::find($agent_id);
      $all_agents=Category::orderBY('id','desc')->get();
      return view("front.page.about.agent-detail",compact(['single_agent','all_agents']));
     }

  	public function store(StoreCategoryFormRequest $request){
      $agent=new Category();
      $agent->name=$request['name'];
      $agent->save();
      return redirect()->back()->withSuccess('Category Created succesfull');
    }

  	public function update(StoreCategoryFormRequest $request,$agent_id){
      $agent=Category::find($agent_id);
      $agent->name=$request['name'];
      $agent->save();
      return redirect()->back()->withSuccess('Category Created succesfull');
  }

    public function delete(Request $request){
    $checkboxes=$request->checkboxes;
    if(!empty($checkboxes)){
      foreach($checkboxes as $chekbox_id){
        $property=Category::find($chekbox_id);
        $property->delete();
        // dd($property);
      }
        return redirect()->back()->withSuccess('Agnet Deleteed succesfully');
    }
      return redirect()->back()->withError('Please Select One');
   }
}


