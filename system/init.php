<?php

spl_autoload_register(function($className){
    if(file_exists("../system/classes/".$className.".php")){
      require_once("../system/classes/".$className.".php");
    }
});

new rout();


 ?>
