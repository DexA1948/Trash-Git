<?php

//callback functions are those which are passed as arguments to other functions
function my_callback($item){
    return strlen($item);
}

$strings = ["apple", "ball", "cucumber", "dandibiyo"];
$lengths = array_map("my_callback", $strings);
print_r($lengths);

//php supports anonymous callback functions
$lengths2 = array_map( function($item) { return strlen($item); }, $strings);
print_r($lengths2);

//userdefined call back function
function exclaim($item){
    return $item."!";
}

function Format($item, $formatter){
    echo $formatter($item);
}

echo Format("Hello", "Exclaim");
?>
