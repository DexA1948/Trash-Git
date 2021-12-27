<?php 

$t = date("H");
echo $t;

if ($t<10){
    echo "Good Morning";
}
else if ($t<20){
    echo "Good Day";
}
else{
    echo "Good Night";
}
?>