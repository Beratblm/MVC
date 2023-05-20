<?php 
class Controller{

    public function render($name, $data = []){

        View::render($name, $data);
    }

    public function model($file){

        if(file_exists(ModelPath."/".$file.".php")){
            require ModelPath."/".$file.".php";
            if(class_exists($file)){
                return new $file;
            }
        }else{
            echo "File Not Found";
        }
    }

    




}