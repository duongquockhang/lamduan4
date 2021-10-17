<?php
class note_type_model extends DModel{
    public function __construct(){
       parent::__construct();
    }
    public function list_note_type($table){
        $sql = "SELECT * FROM $table ORDER BY id DESC";
      return $this->db->select($sql);  
}
public function insert_note_type($table,$data){
    return $this->db->insert($table,$data);
  }
  public function delete_note_type($table,$cond){
    return $this->db->delete($table,$cond);
  }
 
  public function note_type_id($table,$cond){
    $sql = "SELECT * FROM $table WHERE $cond";
   
    return $this->db->select($sql);
  }
  public function update_note_type($table,$data,$cond){
    return $this->db->update($table,$data,$cond);
  }
  public function note_type($table){
    $sql = "SELECT * FROM $table ORDER BY id DESC";
  return $this->db->select($sql);  
}
}