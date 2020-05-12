<?php

class welcomemodel extends database{

  public function myData(){

    // $id = 2;
    // $fullname = "Aliur Rahman";
    // $username = "aliurrahman10";
    // $email    = "aliur@rakib.com";
    //
    // $r = $this->Query("INSERT INTO users(id, fullname,username,email)VALUES(?,?,?,?)",[$id, $fullname, $username, $email]);

      $r = $this->Query("SELECT * FROM users");

      if($r){
        return $this->fetchall();
      }


  }


}



 ?>
