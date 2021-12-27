<?php 

//break and continue in PHP
$x = 0;

while ($x<10){
    if($x==4){
        break;
    }
    echo "Value is $x<br>";
    $x++;
}

while ($x<10){
    if($x==4){
        $x++;
        continue;
    }
    echo "Value is $x<br>";
    $x++;
}

?>