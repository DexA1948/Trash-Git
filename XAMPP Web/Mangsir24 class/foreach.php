<?php

$arr = array(
    array("Albastross", "Buffalo", "Cat"),
    array("Dog", "Elephant", "Fox"),
    array("Guransnani", "Imli", "Jar")
);

foreach($arr as $animals){
    foreach($animals as $animal){
        echo $animal." ";
    }
    echo "<br>";
}