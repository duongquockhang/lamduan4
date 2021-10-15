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
   
    
    $this->load->view('cpnael/note_type/list');
    $this->load->view('cpnael/footer');
   }
}