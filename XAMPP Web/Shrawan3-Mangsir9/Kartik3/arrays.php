<?php
//arrays in PHP
$array = ["foo", "foo" => "bar", "eggs", 6=>"Hello", "World"];
var_dump($array);

$num = [1, 2, 3, 4, 7];
var_dump($num);
?>

<hr>

<?php

class A {
    private $B;
    protected $C;
    public $D;
    function __construct()
    {
        $this->{1} = null;
    }
}

var_export((array) new A());
?>

<hr>

<?php
//sorting arrays in PHP
//sort(): sort arrays in ascending order
//rsort(): sort arrays in descending order
//asort(): sort arrays in ascending order according to the value
//arsort(): sort arrays in descending order according to the value
//ksort(): sort arrays in ascending order according to the keys
//krsort(): sort arrays in descending order according to the keys

$cars = ["Apple", "Dog", "Ball"];
var_dump($cars);
echo "<br>";
krsort($cars);
echo "<br>";
var_dump($cars);
echo "<br>";
echo "<br>";

$car = [10=>"apple", 1=>"banana", 5=>"peach", 4=>"cat"];
var_dump($car);
echo "<br>";
arsort($car);
echo "<br>";
var_dump($car);
?>