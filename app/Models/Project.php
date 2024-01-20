<?php
namespace App\Models;

class Project{


    public function getProject(){
        return \DB::table('project AS p')->join("image AS i","p.idProject","=","i.idProject")->select("p.idProject","p.name","p.text","i.idImage","i.path","i.alt")->paginate(6);
    }

    public function insertProject($name,$text,$idUser){
        return \DB::table('project')->insertGetId(["name"=>$name, "text"=>$text, "idUser"=>$idUser]);
    }

    public function deleteProject($id){
        return \DB::table('project')->where("idProject","=",$id)->delete();
    }

    public function getProjectWithId($id){
        return \DB::table('project AS p')->join("image AS i","p.idProject","=","i.idProject")->where("p.idProject","=",$id)->select("p.idProject","p.name","p.text","i.idImage","i.path","i.alt")->first();
    }

    public function  updateProject($idProject, $name, $text){
        return \DB::table('project')->where("idProject","=",$idProject)->update(["name"=>$name,"text"=>$text]);
    }
}
