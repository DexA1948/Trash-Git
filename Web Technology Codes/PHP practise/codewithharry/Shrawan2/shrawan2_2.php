<html>

<head>
    <title>Shrawan 2 PHP Practice_2</title>
</head>

<body>
    <div id="id1">

    </div>

    <?php

    //assign by reference, same as C++
    $a = 1;
    $b = &$a;
    $b = 3;
    echo $a;
    echo $b;

    //constants
    define('pi', 3.14);
    echo "<br>" . pi;

    //superglobals
    //echo 'Hello ' . htmlspecialchars($_COOKIE["name"]) . '!';

    //variable variables
    $a = "hello";
    $$a = "HELLO";

    echo "<br>" . $hello;

    //class
    class foo
    {
        var $bar = "I am bar.";
        var $arr = ['I am A.', 'I am B.', 'I am C.'];
        var $r = "I am r.";
    }

    $foo = new foo();

    $bar = "bar";

    $baz = ['foo', 'bar', 'baz', 'quux'];

    echo $foo->$bar . "\n";

    echo $foo->{$baz[1]} . "\n";
    $arr = 'arr';
    echo $foo->{$arr[1]} . "\n";

    //Anynomous functions
    echo "<h1>Anynomous functions</h1>";

    $greet = function ($name) {
        printf("Hello %s\r\n", $name);
    };

    $greet('World');
    $greet('PHP');

    echo "<br>";

    $message = 'hello';

    // $example = function(){
    //     var_dump($message);
    // };
    // $example();


    //Loops in PHP

    //for loops
    for ($i=0; $i<10; $i++)
    {
        if($i % 2 == 0){
            echo $i;
        }
    }

    for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++);

    $people = array(
        array('name' => 'Kalle', 'salt' => 856412),
        array('name' => 'Pierre', 'salt' => 215863)
    );
    
    for($i = 0; $i < count($people); ++$i) {
        // $people[$i]['salt'] = mt_rand(000000, 999999);
    }

    echo "<br>";
    print_r($people[0]['salt']);
    echo "<br>";
    print_r($people[1]['salt']);

    // for($i = 'a'; $i != 'z'; $i++):
    //     printf("<br>%s for %s<br>", $i, $i);
    // endfor;

    $arr = array("soo"=>"apple", "foo"=>"ball", 3=>"cat", 4=>"dog");
    for($i=0, $size=count($arr); $i<$size; $i++):
        echo "<br>".$arr[$i];
    endfor;

    foreach($arr as $key=>$value):
        echo "<br>$key => $arr[$key]";
    endforeach;

    //Object iteration
    ?>
</body>

</html>
