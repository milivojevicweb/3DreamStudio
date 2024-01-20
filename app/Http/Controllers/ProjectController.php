<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Exception;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function page(){
        try{

            $model= new Project();
            $projects=$model->getProject();
            $this->data["projects"]=$projects;
            return view('front.pages.projects', $this->data);

        }catch(\Exception $ex) {
            return redirect()->back()->with('message','Greška!');
            \Log::error($ex->getMessage());
        }
    }

    public function fetch_data(Request $request){
        if($request->ajax()){
            $model= new Project();
            $project=$model->getProject();
            return response()->json($project);
        }
    }

    public function getOneProject($id){
        if(isset($id)){
            try{
                $model= new Project();
                $project=$model->getProjectWithId($id);
                $this->data["project"]=$project;
                return view("front.pages.oneProject",$this->data);
            }catch(\Exception $ex) {
                return redirect()->back()->with('message','Greška!');
                \Log::error($ex->getMessage());
            }
        }
    }
}
