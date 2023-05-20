<?php 
class Home extends Controller{

    public function __construct()
    {
        
        
    }

    public function index($data = []){
      $metin = "insert into values <script>alert('merhaba')</script>";
      echo helper::clean($metin);
        exit;
       $uyeler = $this->model("uye")->getAll(); 
       $data = $uyeler->fetchAll();
       $this->render("Homes", $data);
      
        
    }
}