<?php
echo "PHP_INT_SIZE:",PHP_INT_SIZE,"<br>";//8 bytes
echo "PHP_INT_MAX:",PHP_INT_MAX,"<br>";
echo "pow(2,64)",pow(2, 64);
echo "<br>";
echo "is_int(6):".is_int(6)."<br>";
echo "<-var_dump(is_int(6.3)):".var_dump(is_int(6.3))."<br>";
echo "Hello<br>";

echo PHP_FLOAT_MIN;
echo "<br>";
echo "number of decimal digits that can be rounded to float without losing precision:".PHP_FLOAT_DIG;//number of decimal digits that can be rounded to float without losing precision
echo "<br>";
echo "PHP_FLOAT_MAX".PHP_FLOAT_MAX;
echo "<br>";
echo PHP_FLOAT_EPSILON;
?>

<?php
echo "<hr>";
echo "<br>Second one<br>";
$x = 1.9e11;
var_dump($x);
echo is_infinite($x);
?>

<?php
echo "<hr>";
echo "<br>Third one<br>";
$x = acos(8);
var_dump($x);
?>

<?php
echo "<hr>";
echo "<br>Fourth one<br>";
$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));

$x = "59.85" + 100;
echo $x;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));
?>

<?php
    echo "7e9" + 79;
    $x = "79";
    var_dump($x);
    echo is_numeric($x);
?>

<?php
    $x = 23.23;
    $x1 = "23.24";

    $x_cast = (int)$x;
    $x1_cast = (integer)$x1;
    $x1_cast1 = intval($x1);

    echo $x_cast, $x1_cast, $x1_cast1;
?>