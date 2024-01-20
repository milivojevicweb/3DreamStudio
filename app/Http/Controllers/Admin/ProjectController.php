<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Requests\IdRequest;
use App\Http\Requests\ProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Image;
use App\Models\Project;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class ProjectController extends AdminController
{

    public function getProject(){

        try{
            $model= new Project();
            $project=$model->getProject();
            $this->data["project"]=$project;
            return view("admin.pages.project.table",$this->data);
        }catch(\Exception $ex) {
            return redirect()->back()->with('message','Greška!');
            \Log::error($ex->getMessage());
        }
    }

    public function projectForm(){
        return view('admin.pages.project.insert',$this->data);
    }

    public function fetch_data(Request $request){
        if($request->ajax()){
            $model= new Project();
            $pag=$model->getProject();
            return response()->json($pag);
        }
    }

    public function insertProject(ProjectRequest $request){
        if($request->has("addProject")){

            $model=new Project();
            $img=new Image();
            $name=$request->input("projectName");
            $text=$request->input("projectText");
            $file=$request->file("image");
            $user=session()->get("user")->idUser;

            $imeFajla = time().$file->getClientOriginalName();

            if($file->isValid()){
                $file->move(public_path()."/images/", $imeFajla);
                try{
                    $idProject=$model->insertProject($name,$text,$user);
                    $insertImage=$img->insertImage($imeFajla,$name,$idProject);
                    return redirect()->back()->with("message", "Uspešno unet projekat!");
                }
                catch(QueryException $ex) {
                    return redirect()->back()->with('message','Greška!');
                    \Log::error($ex->getMessage());
                }
            } else {
                return redirect()->back()->with("message", "Fajl nije validan!");
            }
        }

    }

    public function deleteProject(IdRequest $request){
        $id=$request->input('id');
        if(isset($id)){
            try{
                $model= new Project();
                $delete= $model->deleteProject($id);
            }catch(\Exception $ex) {
                return redirect()->back()->with('message','Greška');
                \Log::error($ex->getMessage());
            }
        }
    }

    public function ajaxGetProject(){
        try{
            $model=new Project();
            $project=$model->getProject();
            return response()->json($project);
        }catch(\Exception $ex) {
            return redirect()->back()->with('message','Greška!');
            \Log::error($ex->getMessage());
        }
    }

    public function getProjectWithId($id){
        try{
            $model= new Project();
            $project=$model->getProjectWithId($id);
            $this->data['project']=$project;
            return view("admin.pages.project.edit",$this->data);
        }catch(\Exception $ex) {
            return redirect()->back()->with('message','Greška!');
            \Log::error($ex->getMessage());
        }
    }

    public function updateProject(UpdateProjectRequest $request){
        if ($request->has('editProject')) {

            $name=$request->input('name');
            $text=$request->input('text');
            $id=$request->input('id');

            $file = $request->file('image');

            try{

                $model = new Project();
                $img = new Image();

                if($request->hasFile('image')){

                    $imeFajla = time().$file->getClientOriginalName();
                    $file->move(public_path()."/images/", $imeFajla);

                    $updateImage=$img->updateImageProject($id,$imeFajla,$name);

                }else{
                    $updateImageNo=$img->updateImageProjectNo($id,$name);
                }

                $update=$model->updateProject($id,$name,$text);

                if($update){
                    return redirect()->back()->with('message','Projekat je ažuriran!');
                }elseif($update || isset($updateImage)) {
                    return redirect()->back()->with('message','Projekat je ažuriran!');
                }elseif(isset($updateImageNo)){
                    return redirect()->back()->with('message','Projekat je ažuriran!');
                }else{
                    return redirect()->back()->with('message','Product nije ažuriran!');
                }

            }catch(\Exception $ex) {
                return redirect()->back()->with('message','Greška!');
                \Log::error($ex->getMessage());
            }
        }
    }

}
