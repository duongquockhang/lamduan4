<?php
class note_model extends DModel{
    public function __construct(){
       parent::__construct();
    }
    public function note_type($table){
      // $sp_tungtrang = 2;
			// if(!isset($_GET['trang'])){
			// 	$trang = 1;
			// }else{
			// 	$trang = $_GET['trang'];
			// }
			// $tung_trang = ($trang-1)*$sp_tungtrang;
        $sql = "SELECT * FROM $table ORDER BY id DESC";
      
      return $this->db->select($sql);  
}

public function insert_note($table,$data){
 
    return $this->db->insert($table,$data);
    
   
  }
  public function note($table_note,$table_note_type){
    $sql = "SELECT * FROM $table_note JOIN $table_note_type ON $table_note.type_id = $table_note_type.id ORDER BY id_note DESC ";
  return $this->db->select($sql);  
  
}
public function delete_note($table,$cond){
 
  return $this->db->delete($table,$cond);
 
}
public function note_id($table,$cond){
  $sql = "SELECT * FROM $table WHERE $cond";
 
  return $this->db->select($sql);
}
public function update_note($table,$data,$cond){
  
  return $this->db->update($table,$data,$cond);
 
}

 
}