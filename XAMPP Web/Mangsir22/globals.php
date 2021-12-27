<?php

$x = 10;
$y = 20; 

function see(){
    echo $GLOBALS["x"];
}

see();

//or use globals
function see2(){
    global $x, $y;
    echo $x, $y;
}

see2();
?>