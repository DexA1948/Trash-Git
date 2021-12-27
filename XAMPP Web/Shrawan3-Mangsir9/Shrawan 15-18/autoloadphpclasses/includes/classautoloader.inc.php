<?php

spl_autoload_register(function($className){
   
    $fullPath =  "classes/".$className.".class.php";
    
    if(!file_exists($fullPath)) {
        return false;
    }
    
    include_once($fullPath);
    
});

?>