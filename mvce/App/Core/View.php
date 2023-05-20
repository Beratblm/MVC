<?php 

class View{
  
    public static function render($name, $data = []){
       
        $FileName =  ViewPath. "/". $name.".php";
        if(file_exists($FileName)){
            require $FileName;
        }else{
            exit($name ."Görüntü Dosyası Bulunamadı...");
        }    
        
    
    }

}