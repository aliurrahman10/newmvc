<?php

class postModel extends database{

  public function add($title, $content){

      if($this->Query("INSERT INTO posts(title, content)VALUES(?,?)",[$title, $content])){
        return true;
      }else{
        return false;
      }

  }


  public function count(){
    if($this->Query("SELECT * FROM posts")){
      return $this->rowCount();
    }
  }


  public function showpost(){
    if($this->Query("SELECT * FROM posts")){
      return $this->fetchall();
    }
  }

  public function deletepost($id){
    if($this->Query("DELETE FROM posts WHERE id= $id")){
      return true;
    }else{
      return false;
    }
  }

  public function edit($id){
    if($this->Query("SELECT * FROM posts WHERE id = $id")){
      return $this->fetchall();
    }
  }

  public function update($id,$title,$content){
    if($this->Query("UPDATE posts SET title =?, content =? WHERE id =?", [$title, $content, $id])){
      return true;
    }else{
      return false;
    }
  }


}


 ?>
