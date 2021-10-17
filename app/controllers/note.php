<?php
class note extends DController {
  private $fm;
    public function __construct(){
        $data = array();
      
        parent::__construct();
    }
    public function index(){
      
         $this->add_note();
    }
   public function add_note(){
    $this->load->view('cpnael/header');
       
        $table= 'note_type';
        $note_type_model= $this->load->model('note_model');
        $data['note_type']=$note_type_model->note_type($table);
        
        $this->load->view('cpnael/note/add',$data);
        $this->load->view('cpnael/footer');
   }
   public function insert_note(){
    
    $tittle = $_POST['tittle'];
    $content = $_POST['content'];
    $type_id = $_POST['type_id'];
    $table= 'note';
    $data= array(
        'tittle' =>  $tittle,
        'content'=>$content,
        'type_id'=>$type_id

    );
    $note_model= $this->load->model('note_model');
    $result= $note_model->insert_note($table,$data); 
   if($result == 1){
    
    header("Location:".BASE_URL."/?url=note/list_note");
    $result= $message['msg'] = "Thêm danh mục sản phẩm thành công";
   }
   else{
  
     header("Location:".BASE_URL."/?url=note_type");
   }
  
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
public function delete_note($id){
  $table= 'note';
  $cond = "id_note=$id";
  $note_model= $this->load->model('note_model');
  $result= $note_model->delete_note($table,$cond); 
  if($result==1){
      header("Location:".BASE_URL."/?url=note/list_note");
     }
     else{
      echo 'Xóa dữ liệu thất bại';
     }
}
public function edit_note($id){
  $this->load->view('cpnael/header');
  $table_note= 'note';
  $table_note_type= 'note_type';
  $cond = "id_note=$id";
  $note_model= $this->load->model('note_model');
  $note_type_model= $this->load->model('note_type_model');
  $data['note_by_id']=$note_model->note_id($table_note,$cond);
  $data['note_type']=$note_type_model->note_type($table_note_type);
  $this->load->view('cpnael/note/edit',$data);
  $this->load->view('cpnael/footer');
  //  header("Location:".BASE_URL."/?url=product/list_category");
}
public function update_note($id){
  $table= 'note';
  $cond = "id_note='$id'";
  $tittle = $_POST['tittle'];
  $content = $_POST['content'];
 $type_id = $_POST['type_id'];
   $data= array(
            'tittle' =>  $tittle,
            'content' =>  $content,
            'type_id'=>$type_id
        );
        $note_type= $this->load->model('note_model');
        $result=$note_type->update_note($table,$data,$cond);
        if($result==1){
          $message['msg'] = "Thêm danh mục sản phẩm thành công";
            header("Location:".BASE_URL."/?url=note/list_note");
  
           }
           else{
            echo 'Xóa dữ liệu thất bại';
           }

}
public function details_note($id){
  $this->load->view('cpnael/header');
  $table_note= 'note';
  $table_note_type= 'note_type';
  $cond = "id_note=$id";
  $note_model= $this->load->model('note_model');
  $note_type_model= $this->load->model('note_type_model');
  $data['note_by_id']=$note_model->note_id($table_note,$cond);
  $data['note_type']=$note_type_model->note_type($table_note_type);
  $this->load->view('cpnael/note/details',$data);
  $this->load->view('cpnael/footer');
}
 public function search(){
  $this->load->view('cpnael/header');
  $table_note= 'note';
 }
 
}

