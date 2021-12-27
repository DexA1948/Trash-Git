<?php

$arr = array(
    "options" => array(
        "min_range" => 10,
        "max_range" => 100
    )
);

$int = 108;

// php filters advanced
if (!filter_var($int, FILTER_VALIDATE_INT, $arr)){
    echo "Some error";
}

$url = "http://www.facebook.com/?name=Deshant";

if (filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)){
    echo "Query present";
}

// php callback functions

$arr = array("apple", "ball", "cat");

function len($string){
    return strlen($string);
}

function array_map2($func, $arr){
    $arr2 = array();

    foreach($arr as $a){
        $arr2[$a] = $func($a);
    }

    return $arr2;
}

echo "<br>";
print_r(array_map2("len", $arr)); 

// php json
// JSON stands for JavaScript Object Notation
// It is a text based format and is used to send data across networks and used as data format by any programming language

class Person{
    public $name= "Deshant";

    public function print_name(){
        echo "<br>".$this->name;
    }
}

$me = new Person;

echo "<br>";
var_dump($me);

$jsonObj = '{"name":"Deshant", "my":"baby", "what":"ass"}';

echo "<br>";
var_dump(json_decode($jsonObj));

// stdClass in PHP is a empty class which is used to cast other types to object
// array can be casted into stdClass object using (object) and viceversa using (array)

$jsonArray = (array) json_decode($jsonObj);

echo "<br>";
var_dump($jsonArray);

$arrObj = (object) array_map2("len", $arr);
echo "<br>";
var_dump($arrObj);

// stdClass can be used for dynamic objects
$arrObj->favcolor = "Yellow";
echo "<br>";
var_dump($arrObj);

// adding a function dynamically to stdClass
$arrObj->printFav = function(){
    global $arrObj;
    echo $arrObj->favcolor;
};

// $arrObj->printFav2 = function(){
//    echo $this->favcolor;
// };

// calling a function from stdClass
echo "<br>";
($arrObj->printFav)();

echo "<br>";
($arrObj->printFav2)();

?>