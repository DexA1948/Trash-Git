<html>

<head>
    <title>Asar31 PHP Practice</title>
</head>

<body>
    <div id="id1">
        <h1>This is heading 1.</h1>
    </div>
</body>

<?php
echo "Hello world";

$arr = ["apple", "ball"];

var_dump($arr);
?>

<?php
function getArray(){
    return [0=>"One", 1=>"Two"];
}
$array = array(
    "foo"=>"bar",
    "42"=>"Forty-Two",
    "multi"=>["dimensional"=>["array"=>"42"]]);

var_dump($array["foo"]);
var_dump($array[42]);
var_dump($array[$array["multi"]["dimensional"]["array"]]);

list( ,$secondElement) = getArray();
echo "<br>";
print_r($secondElement);

$secondElement2 = getArray()[1];
echo $secondElement2;
?>

<pre>
<?php
$info = array('coffee', 'brown', 'caffeine');

// Listing all the variables
list($drink, $color, $power) = $info;
echo "$drink is $color and $power makes it special.\n";

// Listing some of them
list($drink, , $power) = $info;
echo "$drink has $power.\n";

// Or let's skip to only the third one
list( , , $power) = $info;
echo "I need $power!\n";

// list() doesn't work with strings
list($bar) = "abcde";
var_dump($bar); // NULL

$arr2 = array(
    "foo" => "bar",
    "soo" => "car",
    "doo" => "tar"
);

list("foo"=>$a, "doo"=>$b) = $arr2;

echo "<br>$a $b<br>";

$arr2[] = "far";
$arr2[] = "char";
var_dump($arr2);

unset($arr2["foo"]);
var_dump($arr2);

unset($arr2);
print_r($arr2);
?>
</pre>
</html>