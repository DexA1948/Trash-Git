<pre>
<?php

//callback function is when we send a function as a parameter
//we can use anynomous and userdefined functions as callback functions too

// function length($item, $price){
//     return strlen($item)*$price;
// }

$strings = ["apple", "ball", "cucumber", "dentist"];
$money = [1, 2, 3, 4];

// $lengths = array_map("length", $strings, $money);

// print_r($strings);
// print_r($lengths);

// //anynomous callback functions
// $lengths = array_map(function($item){
//     return strlen($item);
// }, $strings);

// print_r($lengths);

//userdefined callback function
function conn($item, $item2){
    return $item."--->".$item2;
}

function sel($array1, $array2, &$array3, $what){

    for($i=0; $i<4; $i++){
        $array3[$i] = $what($array1[$i], $array2[$i]);
    }

}

$arr = array();

print_r($arr);

sel($strings, $money, $arr, "conn");

print_r($arr);

?>
</pre>