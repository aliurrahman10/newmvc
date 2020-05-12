<?php

class postController extends framework{

  public $postmodel;
  public $idNo;

  public function __construct(){
    $this->postmodel = $this->model("postModel");
  }

  public function index(){
    $this->view("addnewpost");
  }

  public function addPost(){

    $myData = [
      'title'     => $this->inputs('title'),
      'content'   => $this->inputs('content'),
      'title_error' => '',
      'content_error' => ''
    ];


      if(empty($myData['title'])){
          $myData['title_error'] = 'Titile can not be empty!';
      }

      if(empty($myData['content'])){
        $myData['content_error'] = 'Content can not be empty';
      }


        if(empty($myData['title_error']) || empty($myData['content_error'])){

            $this->postmodel->add($myData['title'], $myData['content']);
            $this->setFlash("success_message","Data insertd successfully");
            header("Location:".BASE_URL."/postController");
        }else{

          $this->view("addnewpost", $myData);
        }


      }

  public function rows(){
    if($this->postmodel->count()){
      echo $this->postmodel->count();
    }
  }


  public function posts(){
    if($this->postmodel->showpost()){
       $data = $this->postmodel->showpost();
       $this->view("showallpost", $data);
    }else{
      $this->view("showallpost");
    }
  }

  public function delete($id){
    if($this->postmodel->deletepost($id)){
          header("Location:". BASE_URL."/postController/posts");
    }
  }

  public function edit($id){

     $data =  $this->postmodel->edit($id);
      $this->view("editpost",$data);
  }

  public function updatePost($id){

    $myData = [
      'title'     => $this->inputs('title'),
      'content'   => $this->inputs('content'),
      'title_error' => '',
      'content_error' => ''
    ];


      if(empty($myData['title'])){
          $myData['title_error'] = 'Titile can not be empty!';
      }

      if(empty($myData['content'])){
        $myData['content_error'] = 'Content can not be empty';
      }


        if(empty($myData['title_error']) && empty($myData['content_error'])){

           $this->postmodel->update($id, $myData['title'], $myData['content']);
           header("Location:".BASE_URL."/postController");


        }else{
          $this->view("addnewpost", $myData);
        }
  }
}



 ?>
