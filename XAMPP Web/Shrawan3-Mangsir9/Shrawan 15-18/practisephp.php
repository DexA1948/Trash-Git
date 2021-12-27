<!-- Learning PHP Classes and Objects -->

<!-- Object and References -->
<?php

// // Shrawan 15
// $a = 10;
// $b = $a;
// $b = 11;

// echo "a = $a; b = $b;<br>";

// function foo(&$var) { }

// foo($a); // $a is "created" and assigned to null

// $b = array();
// foo($b['b']);
// var_dump(array_key_exists('b', $b)); // bool(true)

// $c = new StdClass;
// foo($c->d);
// var_dump(property_exists($c, 'd')); // bool(true)

// //there is a warning before referencing global variables inside functions, see example below
// $var1 = "Example variable";
// $var2 = "";

// function global_references($use_globals)
// {
//     global $var1, $var2;

//     if(!$use_globals){
//         //doing this just creates a local reference to value of a global variable $var1
//         $var2 = & $var1;
//     } else{
//         //updates the global variable $var2 to be a reference to $var1
//         $GLOBALS["var2"] = & $var1;
//     }

//     echo "<br>Inside function: var2 is set to '$var2'\n";//works locally
// }

// global_references(false);
// echo "<br>Outside function: var2 is set to '$var2'\n";

// global_references(true);
// echo "<br>Outside function: var2 is set to '$var2'\n";

// $arr = array(
//     "name" => "Deshant",
//     "addr" => "Kshetrapur",
//     0,1121
// );
// echo "<pre><br>";
// print_r(var_dump($arr));
// echo "</pre>";

// $bbb = & $arr["name"];

// //arrays aren't passed as reference
// $arr2 = $arr;

// $arr2["name"] = "Rajan";

// echo "<pre><br>";
// print_r(var_dump($arr));
// echo "</pre>";

// echo "<pre><br>";
// print_r(var_dump($arr2));
// echo "</pre>";

// $arrr = array(1, 2);
// $a = & $arrr[0];
// $arrr2 = $arrr;
// $arrr2[0]++;
// echo "<pre>arrr<br>";
// print_r(var_dump($arrr));
// echo "</pre>";
// echo "<pre><br>";
// print_r(var_dump($arrr2));
// echo "</pre>";

// //Example from php.net
// $arr = array(1);
// $a =& $arr[0]; 
// echo '<pre><br>$arr<br>';
// print_r(var_dump($arr));
// echo "</pre>";
// $arr2 = $arr;
// $arr2[0]++;
// echo "<pre><br>";
// print_r(var_dump($arr));
// echo "</pre>";
// echo "<pre><br>";
// print_r(var_dump($a));
// echo "</pre>";
// echo "<pre><br>";
// print_r(var_dump($arr2));
// echo "</pre>";

// //objects are passed as reference
// class A{
//     public $foo = 1;
// }

// $a = new A;
// $b = $a;

// $b->foo = 2;
// echo $a->foo;


// //Shrawan 16// //
// echo "<br><hr><div style='text-align:center'><h1>Shrawan 16</h1></div><hr><br>";

// //this is to check how refs work 
// $s16_1 = 1;
// $s16_2 = 2;
// $s16_1_2 = & $s16_1;
// $s16_1 = & $s16_2;

// echo <<<EOT
// \$s16_1 = 1;<br>
// \$s16_2 = 2;<br>
// \$s16_1_2 = & \$s16_1;<br>
// \$s16_1 = & \$s16_2;<br>
// EOT;

// echo <<<EOT
// <br>Answers:<br>
// \$s16_1 = $s16_1<br>
// \$s16_2 = $s16_2;<br>
// \$s16_1_2 = $s16_1_2;<br>
// EOT;

// //Again a bit different
// $s16_1 = 1;
// $s16_2 = 2;
// $s16_1_2 = & $s16_1;
// $s16_1 = $s16_2; //$s16_1 is directly copying value instead of reference lets see

// echo <<<EOT
// <br><br>2]A bit different<br>
// \$s16_1 = 1;<br>
// \$s16_2 = 2;<br>
// \$s16_1_2 = & \$s16_1;<br>
// \$s16_1 = \$s16_2;<br>
// EOT;

// echo <<<EOT
// <br>Answers:<br>
// \$s16_1 = $s16_1<br>
// \$s16_2 = $s16_2;<br>
// \$s16_1_2 = $s16_1_2;<br>
// EOT;

// $a = 1;
// $b = & $a;
// echo "<br>Intitial: a = $a, b = &\$a = $b";
// $b++;
// echo "<br>After \$b++: a = $a, b = &\$a = $b";
// $b = 10;
// echo "<br>After \$b = 10: a = $a, b = &\$a = $b";

// //Here
// echo "<br>";
// $a = 1;
// $c = 22;

// $b = & $a;
// echo "$a, $b<br>"; //Output: 1, 1

// $b++;
// echo "$a, $b<br>";//Output: 2, 2 both values are updated

// $b = 10;
// echo "$a, $b<br>";//Output: 10, 10 both values are updated

// //$b =$c; //This assigns value 2 to $b which also updates $a
// //echo "$a, $b<br>";//Output: 22, 22

// //But, if instead of $b=$c you do
// $b = &$c; //Only value of $b is updated, $a still points to 10, $b serves now reference to variable $c
// echo "$a, $b<br>"//Output: 10, 22

// //===============Shrawan16, 10:26am=================//
// //Return By Reference
// class foo{
//     public $value = 42;

//     public function &getValue(){
//         return $this->value;
//     }
// }

// $obj = new foo;
// $myValue = $obj->value;

// echo $myValue;

// $myValue = 15;

// echo "<br>myValue:".$myValue."<br>obj->value:".$obj->value;

// $myValue2 = & $obj->value;
// $myValue2 = 123;
// echo "<br>myValue2:".$myValue2."<br>obj->value:".$obj->value;

// echo "<hr>";

// $obj2 = new foo;

// $myValue3 = & $obj2->getValue();
// echo "<br>myValue3:".$myValue3."<br>obj2->value:".$obj2->value;

// $myValue3 = 156;
// echo "<br>myValue3:".$myValue3."<br>obj2->value:".$obj2->value;

// //eti kunai function le reference falxa bhane you use & in function name, but it doesnt make it compulsory to pass by ref normally ni garna milxa: eg:
// function &func(){
//     static $stat = 0;
//     $stat++;
//     return $stat;
// }

// $value = &func(); //value is 1 and references the static variable
// $value2 = func(); //value is 2 and doesnt reference the static variable

// func();
// func();

// echo "<br><br>\$value=$value, \$value2=$value2";

// //===============Shrawan16, 10:50am=================//
// //Unsetting References
// //Analogous to Unix "unlink" call
// $a = 1;
// $b = & $a;
// unset($a); //only $a is unset
// echo "<br><br>\$a=$a, \$b=$b";//gives a warning stating a is undefined

// //This link is very useful to understand how PHP variales work: https://www.php.net/manual/en/language.references.unset.php#82955
?>


<!-- =============================================== -->
<!-- Continue Shrawan16, 12:13pm -->
<!-- Learning PHP Namespaces -->

<?php
//Namespaces in PHP
//https://www.php.net/manual/en/language.namespaces.rationale.php
//Using same class name causes name collisions
//Same thing can happen if using same name
//Just like name collisions I get in C++ under a project
//Or even if you manage to create a separate folder to store there will still be collisions while using external packages and APIs

//This is in "Shrawan 15-18/namespacedemo"  folder.
?>

<!-- =============================================== -->
<!-- Continue Shrawan17, 08:59pm -->
<!-- Learning Bunch of things -->

<?php
// class Foo{
//     private static $used = 0;
//     public $id;

//     public function __construct(){
//         $this->id = Foo::$used++;
//     }

//     public function __clone(){
//         $this->id = Foo::$used++;
//     }

//     public static function getUsed(){
//         return Foo::$used;
//     }
// };

// echo "<br/>Before, Foo::Used = ".Foo::getUsed();
// $a = new Foo;
// echo '<br/>$a = new Foo; //a created';
// echo "<br/>Output: a->id = ".$a->id;
// echo "<br/>After, Foo::Used = ".Foo::getUsed();

// echo "<hr>";

// echo "<br/>Before, Foo::Used = ".Foo::getUsed();
// $b = new Foo;
// echo '<br/>$b = new Foo; //b created';
// echo "<br/>Output: b->id = ".$b->id;
// echo "<br/>After, Foo::Used = ".Foo::getUsed();

// echo "<hr>";

// echo "<br/>Before, Foo::Used = ".Foo::getUsed();
// $c = & $a;
// echo '<br/>$c = & $a; //c created';
// echo "<br/>Output: c->id = ".$c->id;
// echo "<br/>After, Foo::Used = ".Foo::getUsed();

// echo "<hr>";

// echo "<br/>Before, Foo::Used = ".Foo::getUsed();
// $d = clone($a);
// echo '<br/>$d = clone($a); //d created';
// echo "<br/>Output: d->id = ".$d->id;
// echo "<br/>After, Foo::Used = ".Foo::getUsed();

// echo "<hr>";

// echo '<br/>Output: <br/> $a->id = '.$a->id.'<br/> $b->id = '.$b->id.'<br/> $c->id = '.$c->id.'<br/> $d->id = '.$d->id;

// echo "<hr>";

// echo "<br/>Before, Foo::Used = ".Foo::getUsed();
// $a = new Foo;
// echo '<br/>$a = new Foo; //new a created';
// echo "<br/>Output: a->id = ".$a->id;
// echo '<br/>since $c = & $a; //$c is also changed';
// echo "<br/>Output: c->id = ".$c->id;
// echo "<br/>After, Foo::Used = ".Foo::getUsed();

// echo "<hr>";

// echo "<br/>Before, Foo::Used = ".Foo::getUsed();
// $a = $b;//Objects in php passed by reference 
// echo '<br/>$a = $b; //$a copies $b (Note: Objects are passed by reference)';
// echo "<br/>Output: a->id = ".$a->id;
// echo '<br/>since $c = & $a; //$c is also changed';
// echo "<br/>Output: c->id = ".$c->id;
// echo "<br/>After, Foo::Used = ".Foo::getUsed();

// echo "<hr>";

// echo '<br/>Output: <br/> $a->id = '.$a->id.'<br/> $b->id = '.$b->id.'<br/> $c->id = '.$c->id.'<br/> $d->id = '.$d->id;

// echo "<hr>";

// echo "<br/>Before, Foo::Used = ".Foo::getUsed();
// $a->id = 23;
// echo '<br/>$a->id = 23; //$a changes id<br/>Let\'s see what happens $b->id and $c->id';
// echo '<br/>Output: <br/>$a->id = '.$a->id.'<br/> $b->id = '.$b->id.'<br/> $c->id = '.$c->id.'<br/> $d->id = '.$d->id;
// echo "<br/>After, Foo::Used = ".Foo::getUsed();

// echo "<hr>";

// echo "<br/>Before, Foo::Used = ".Foo::getUsed();
// $a = & $d;
// echo '<br/>$a = & $d; //$a, $d are reference to Object id 2?';
// echo '<br/>Output: <br/>$a->id = '.$a->id.'<br/> $b->id = '.$b->id.'<br/> $c->id = '.$c->id.'<br/> $d->id = '.$d->id;
// echo "<br/>After, Foo::Used = ".Foo::getUsed();

// echo "<hr>";

// echo "<br/>Before, Foo::Used = ".Foo::getUsed();
// unset($a);
// echo '<br/>unset($a); //$a unset';
// echo '<br/>Output: <br/>$a->id = '.$a->id.'<br/> $b->id = '.$b->id.'<br/> $c->id = '.$c->id.'<br/> $d->id = '.$d->id;
// echo "<br/>After, Foo::Used = ".Foo::getUsed();

//Summary ma Objects in PHP are passed as reference. 
?>

<!-- =============================================== -->
<!-- Continue Shrawan17, 10:00pm -->

<!-- TO DO'S -->
<!-- 
    Aaja object bare ani aru kei kura pade diuso:
    To do's:
        PHP ko database sanga ko connection haru padna xa
        
        First: Finish PHP Object
        
        I am at $instance example#3 in this link:
            https://www.php.net/manual/en/language.oop5.basic.php
        
        Was searching for instance and to follow up here:
            https://www.w3resource.com/php/classes-objects/php-object-oriented-programming.php 
 -->
