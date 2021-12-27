<!-- This example is from https://www.php.net/manual/en/function.include.php -->
<?php
    function foo()
    {
        global $color;

        include 'vars.php';

        echo "$color";
    }

    foo();

    //include 'http://www.example.com/file.php?foo=1&bar=2';

    $get = include 'vars.php';
    echo $get;
?>