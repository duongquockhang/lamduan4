<?php
class note_model extends DModel{
    public function __construct(){
       parent::__construct();
    }
    public function category($table){
        $sql = "SELECT * FROM $table ORDER BY id DESC";
      return $this->db->select($sql);  
}
   
}