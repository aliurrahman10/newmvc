<?php

 function linkCSS($filename){
  $url = BASE_URL.'/'.$filename;
  return '<link rel="stylesheet" type="text/css" href="'.$url.'">';
}

 function linkJS($filename){
   $url = BASE_URL.'/'.$filename;
   return '<script src = "'.$url.'"></script>';
 }

 function linkIMG($filename){
   $url = BASE_URL.'/'.$filename;
   return '<img src = "'.$url.'">';
 }


 ?>
