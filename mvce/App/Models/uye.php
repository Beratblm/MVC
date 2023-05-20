<?php 

class uye extends Model{

    public function getAll(){
      $uye = $this->db->query("SELECT * FROM uye");
      return $uye;
    }
}