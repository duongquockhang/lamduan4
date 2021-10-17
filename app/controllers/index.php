<?php
class index extends DController {
    
    public function __construct(){
        $data = array();
      
        parent::__construct();
    }
    public function index(){
      
         $this->list_note();
    }
   public function list_note(){
    $this->load->view('cpnael/header');
    
    $table_note= 'note';
    $table_note_type='note_type';  
    $note_model= $this->load->model('note_model');
    $result= $note_model->note($table_note,$table_note_type); 
    $data['note']=$note_model->note($table_note,$table_note_type);
    $this->load->view('cpnael/note/list',$data);
    $this->load->view('cpnael/footer');
}
public function insert_note_type(){
    
    $name = $_POST['name'];
    $description = $_POST['description'];
    $table= 'note_type';
    $data= array(
        'name' =>  $name,
        'description'=>$description
    );
    $note_type_model= $this->load->model('note_type_model');
    $result= $note_type_model->insert_note_type($table,$data); 
   if($result == 1){
      
     header("Location:".BASE_URL."/?url=note_type/list_note_type");
   }
   else{
  
     header("Location:".BASE_URL."/?url=note_type");
   }
}
public function delete_note_type($id){
    $table= 'note_type';
    $cond = "id=$id";
    $note_type_model= $this->load->model('note_type_model');
    $result= $note_type_model->delete_note_type($table,$cond); 
    if($result==1){
        header("Location:".BASE_URL."/?url=note_type/list_note_type");
       }
       else{
        echo 'Xóa dữ liệu thất bại';
       }
}
public function edit_note_type($id){
    $this->load->view('cpnael/header');
    $table= 'note_type';
    $cond = "id=$id";
    $note_type_model= $this->load->model('note_type_model');
    $data['note_type_by_id']=$note_type_model->note_type_id($table,$cond);
    $this->load->view('cpnael/note_type/edit',$data);
    $this->load->view('cpnael/footer');
    // header("Location:".BASE_URL."/?url=product/list_category");
  }
  public function update_note_type($id){
    $table= 'note_type';
    $cond = "id='$id'";
    $name = $_POST['name'];
    $description = $_POST['description'];
    $data= array(
        'name' =>  $name,
        'description'=>$description
    );
    $note_type_model= $this->load->model('note_type_model');
    $result=$note_type_model->update_note_type($table,$data,$cond);
    if($result==1){
        header("Location:".BASE_URL."/?url=note_type/list_category");
       }
       else{
        echo 'Xóa dữ liệu thất bại';
       }
  }
}