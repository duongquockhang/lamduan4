<?php
class note_type extends DController {
    
    public function __construct(){
        $data = array();
      
        parent::__construct();
    }
    public function index(){
      
         $this->add_note_type();
    }
   public function add_note_type(){
    $this->load->view('cpnael/header');
   
    
    $this->load->view('cpnael/note_type/add');
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
      
     header("Location:".BASE_URL."/?url=note_type/add_note_type");
   }
   else{
  
     header("Location:".BASE_URL."/?url=note_type");
   }
  
}

}