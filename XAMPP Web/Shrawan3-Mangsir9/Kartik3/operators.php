<?php
//spaceship
//combination of <= and >= where -1, 0 and 1 is used to compare between 2 numbers
$x = "15";
$y = 15;

echo $x<=>$y;
?>

<?php
//.= is used as concatenation assignment used to concatenate
$x="Hello";
$y = "World";

$x .= $y; //i.e:$x = $x.$y
echo $x;
?>

<?php
//null coalescing
$x = false;
$y = "Hello";
$n = null;

$ans = $x??$y;
var_dump($ans);
$ans = $n??$y;
var_dump($ans);
?>