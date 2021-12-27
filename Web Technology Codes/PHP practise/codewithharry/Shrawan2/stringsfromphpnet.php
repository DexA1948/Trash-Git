<!-- https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.heredoc -->
<html>

<head>
    <title>Strings</title>
</head>

<body>
    <h1>Strings</h1>


    <?php

        $fruit = "apple";

        //This is Heredoc
        $paragraph = <<<this
            I am Deshant Devkota.
            This is heredoc.
            Variables are parsed in Heredoc.
            Also escape sequences are passed.
            This is similar as using "";double quotes.
            Eg: \n Deshant likes $fruit.
            You can use "this" at start.
        this;
        echo "<br>".$paragraph."<br>";


        //This is Nowdoc
        $paragraph = <<<'this'
            I am Deshant Devkota.
            This is Nowdoc.
            Variables aren't parsed in Nowdoc.
            Also escape sequences aren't passed.
            This is similar as using '';single quotes.
            Eg: \n Deshant likes $fruit.
            You must use 'this' at start.
        this;
        echo "<br>".$paragraph."<br>";

        echo "<br>He drank some $fruit juice.<br>";
        //echo "<br>He drank some juice made of $fruits.<br>";
        echo "<br>He drank some juice made of ${fruit}s.<br>";
    ?>

<h1>Complex(Curly) Syntax for Parsing</h1>
<?php
class foo {
    var $bar = 'I am bar.';
}

$foo = new foo();
$bar = 'bar';
$baz = array('foo', 'bar', 'baz', 'quux');
echo "{$foo->$bar}\n";
echo "{$foo->{$baz[1]}}\n";
?>

<?php
// Show all errors.
error_reporting(E_ALL);

class beers {
    const softdrink = 'rootbeer';
    public static $ale = 'ipa';
}

$rootbeer = 'A & W';
$ipa = 'Alexander Keith\'s';

// This works; outputs: I'd like an A & W
echo "I'd like an {${beers::softdrink}}\n";

// This works too; outputs: I'd like an Alexander Keith's
echo "I'd like an {${beers::$ale}}\n";
?>
</body>

</html>