<html>
<body>

<?php
//this code discusses about scope of variable in PHP
//it can be divided into global, local and static
//global variables cannnot be used inside of a function without using global keyword or $GLOBALS[index] array
//local variables cannot be used outside function
//static is similar as in C

$color = "red";
echo $color . "Hello<br>";

function myTest(){
    echo "inside function myTest value of \$color using \$GLOBALS[color] is $GLOBALS[color]<br>";
}

myTest();

function myTest2(){
    global $color;
    echo "inside function myTest2 value of \$color using global \$color is $color<br><br>";
}

MYTEST2();


//PHP data types
//String, Integer(-2,147,483,648 to 2,147,483,647), Float, Boolean($x=true;), Array, Object, NULL, Resource(not actual data type, storing of a reference to external functions and resources, eg:Database Call)

$x = 10;
var_dump($x);
$x = Null;
var_dump($x);
$x = tRue;//boolean
var_dump($x);
?>

</body>
</html>