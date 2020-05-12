<?php

class welcome extends framework{

  public function __construct(){
    $this->helpers("link");
  }

  public function index(){

    $model = $this->model("welcomemodel");

   if($model->myData()){
     $data =  $model->myData();
     //echo $model->myData();
   }


     $this->view("welcome", $data);
  }
}


 ?>
