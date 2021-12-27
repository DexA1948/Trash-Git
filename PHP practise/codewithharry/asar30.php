<html>

<head>
    <title>This</title>
</head>

<body>
    <h1>This is heading.</h1>

    <?php

    $variable1 = 50;
    echo "<br>variable1: ", $variable1;
    //loosely typed
    $variable2 = 40;
    echo "<br>variable2: ", $variable2;

    // 1]Operators in PHP
    /*https://www.w3schools.com/php/php_operators.asp*/
    echo ("<h3>1. Operators in PHP</h3>");
    // a.Arithmetic Operators
    echo ("<h4>a: Arithmetic Operators</h4>");
    echo "variable1 + variable2 = ";
    echo $variable1 + $variable2;
    echo "<br>variable1 - variable2 = ", $variable1 - $variable2;
    echo "<br>variable1 * variable2 = ", $variable1 * $variable2;
    echo "<br>variable1 / variable2 = ", $variable1 / $variable2;
    echo "<br>variable1 mod variable2 = ", $variable1 % $variable2;
    echo "<br>variable1 ^ variable2 = ", $variable1 ** $variable2;

    // b.Assignment Operators
    echo "<h4>b: Assignment Operators</h4>";
    // =, +=, -=, /=, *=, %=
    $variable2 /= 2;
    echo "variable2 / 2 = ", $variable2;

    $variable2 *= 2;
    echo "<br>variable2 * 2 = ", $variable2;

    // c.Comparision Operators
    echo ("<h4>c: Comparision Operators</h4>");
    // ==, ===(Strictly Equal, Identical, i.etype should match),
    // !=, <>, !==, >, <, >=, <=, <=>(Spaceship)
    $a = 1;
    $b = '1';
    echo "\$a = $a & \$b = '$b'";
 
    if ($a === $b) {
        echo "<br>True a===b";
    } else {
        echo "<br>False a!==b";
    }

    if ($a == $b) {
        echo "<br>True a==b";
    }

    // <=> Spaceship
    echo ("<h5><=>Spaceship operator</h5>");
    //Returns 1 if first variable is greater, 0 if equal, -1 if less
    echo "variable1<=>variable2: ", $variable2 <=> $variable1;

    // d.Increment/Decrement Operators
    echo ("<h4>d: Increment/Decrement Operators</h4>");
    $variable1++;
    echo "variable1++: ", $variable1;

    // e.Logical Operators
    echo ("<h4>e: Logical Operators</h4>");
    if ($variable1 % 2 != 0 and $variable2 % 2 == 0)
        echo "variable1 and variable2: ", $variable1 and $variable2;

    //  f.String operators
    echo ("<h4>f: String Operators</h4>");
    // . is Concatenation
    // .= is Concatenation assignment
    $txt1 = "Hello";
    $txt2 = "World";
    /*
            $txt3 = $txt1." ";
            $txt3 .= $txt2;
            echo "<br>$txt1.$txt2 = ", $txt1.$txt2, "<br>\$txt1.\" \" .= \$txt2 = ", $txt3;

            $txt3 = "";
            $txt3 .= $txt1." ".$txt2; 
            */
    echo "\$txt3, (\$txt1.\" \".\$txt2) = ", $txt1 . " " . $txt2;

    //  g.PHP array operators
    // after array

    // h.PHP Conditional Assignment Operators
    echo ("<h4>h: PHP Conditional Assignment Operators</h4>");
    // ?: is Ternary Operator
    $large = $variable1 > $variable2 ? "\$variable1 is larger" : "<br>\$variable2 is larger";
    echo $large;

    $x = NULL;
    // ?? is Null Coalescing
    $x = NULL ?? "red"; //if not NULL $x = value1
    echo "<br>", $x;

    // 2]Switch in PHP
    echo ("<h3>2. Switch in PHP</h3>");
    $choice = 1;
    switch ($choice) {
        case 1:
            echo "This is 1";
            break;
        case 2:
            echo "Can call a function here if choice is 2";
            break;
        default:
            echo "Default";
    }

    $choice = "red";
    echo "<br>";
    switch ($choice) {
        case "red":
            echo "Choice is red";
            break;
        case "green":
            echo "Choice is green";
            break;
        default:
            echo "Default";
    }

    // 3]Array in PHP
    echo ("<h3>3. Array in PHP</h3>");
    $cars = array("Volvo", "BMW", "Toyota");
    echo "I love ", $cars[0], ", ", $cars[1], " and ", $cars[2], ". ";
    $concat = $cars[0] . $cars[1] . $cars[2];
    echo "<br>Concatenated = ", $concat;
    $concat .= ' are cars.';
    echo "<br>Concatenated = ", $concat;

    echo ("<h4>Checking out print_r for key access arrays</h4>");
    $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
    $ret = print_r(array_change_key_case($age, CASE_UPPER), TRUE);
    echo (var_dump($ret));
    print_r("<br><pre>");
    print_r($ret);
    print_r("</pre>");

    $a = array('a' => 'apple', 'b' => 'banana', 'c' => array('x', 'y', 'z'));
    print_r("<br><pre>");
    print_r($a);
    print_r("</pre>");


    ?>
</body>

</html>