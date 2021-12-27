<?php

//you can place this file also in second namespace in doing so 
//you can acess global space using a \ infront
//eg: namespace second;
//eg: $obj = new \A; 

include "firstnamespace.php";
include "secondnamespace.php";

$myObj = new second\A;
?>