<?php declare(strict_types=0);
//if you use strict type code given below wont work as return type is int but we are trying to send float
/*
<?php 
//type declaration in PHP
$x = (int)"11Hello";
$y = 10;
echo $x;
$result = $x + $y;
echo $result;
?>
<hr>
<hr>

<?php 
function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, "5 days");
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
?>
*/
?>

<?php
//return type in PHP
function addNumbers(float $a, float $b):int{
  echo $a+$b;
  return $a+$b;
}

echo addnumbers(10.01, 20);
?>

<hr>
//pass by reference<br>
<?php

function swap(int $x, int $y){
  $temp = $x;
  $x = $y;
  $y = $temp;  
}

function swapbyref(int &$x, int &$y){
  $temp = $x;
  $x = $y;
  $y = $temp;  
}

$x = 10;
$y = 20;

echo "Before swap values are \$x=$x and \$y=$y<br>";
swap($x, $y);
echo "After using normal swap values are \$x=$x and \$y=$y<br>";
swapbyref($x, $y);
echo "After using swap by ref values are \$x=$x and \$y=$y<br>";
?>