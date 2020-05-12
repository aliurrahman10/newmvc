<?php

class framework{


  public function view($viewName, $data = []){
    if(file_exists("../app/views/". $viewName . ".php")){
      require_once "../app/views/". $viewName . ".php";
    }
  }


  public function model($modelName){
    if(file_exists("../app/models/". $modelName . ".php")){
      require_once "../app/models/". $modelName . ".php";
      return new $modelName;
    }
  }


  public function helpers($filename){
    if(file_exists("../system/helpers/".$filename.".php")){
      require_once "../system/helpers/".$filename.".php";
    }
  }


  public function inputs($name){
      if($_SERVER['REQUEST_METHOD'] == 'POST' || $_SERVER['REQUEST_METHOD'] == 'post'){
        return trim(strip_tags($_POST[$name]));
      }else if($_SERVER['REQUEST_METHOD'] == 'GET' || $_SERVER['REQUEST_METHOD'] == 'get'){
      return trim(strip_tags($_GET[$name]));
    }
  }

  public function setSession($sessionName, $sessionValue){
    if(!empty($sessionName) && !empty($sessionValue)){
      $_SESSION[$sessionName] = $sessionValue;
    }
  }

  public function getSession($sessionName){
    if(!empty($sessionName)){
      return $_SESSION[$sessionName];
    }
  }

  public function setFlash($sessionName, $message){
    if(!empty($sessionName) && !empty($message)){
      $_SESSION[$sessionName] = $message;
    }
  }

  public function flash($sessionName, $className){
    if(!empty($sessionName) && !empty($className)){
      if(isset($_SESSION[$sessionName])){
        echo $_SESSION[$sessionName];
      }
      unset($_SESSION[$sessionName]);
    }
  }

}
 ?>
