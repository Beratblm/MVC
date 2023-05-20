<?php 

class Model{

    public $db;

    public function __construct()
    {
        try{
          $this->db = new PDO("mysql:host=".HOSTNAME.";dbname=".DB.";", DBNAME, DBPASS);
          

        }catch(PDOException $e){
            echo $e->getMessage();
        }
        
    }
}