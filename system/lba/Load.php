<?php
class Load {
  
    public function __construct(){
    
    }
    public function view($filename,$data=false){
        if($data==true){
            extract($data);
        }
        include 'app/view/'.$filename.'.php';
    }
    public function model($filename){
        include 'app/models/'.$filename.'.php';
        return new $filename();
    }
    public function controller($filename){
        include 'app/controllers/'.$filename.'.php';
        return new $filename();
    }
   
  
}