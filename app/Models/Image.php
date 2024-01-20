<?php

namespace App\Models;

class Image{

    public function insertImage($path,$alt,$idProject){
        return \DB::table('image')->insert(["path"=>$path, "alt"=>$alt, "idProject"=>$idProject]);
    }

    public function updateImageProject($idProject,$path,$alt){
        return \DB::table('image')->where("idProject","=",$idProject)->update(["path"=>$path,"alt"=>$alt]);
    }

    public function updateImageProjectNo($idProject,$alt){
        return \DB::table('image')->where("idProject","=",$idProject)->update(["alt"=>$alt]);
    }
}
