<html>

<head>
    <title>Shrawan2 PHP Practice</title>
</head>

<body>
    <?php

        function add($a, $b){
            var_dump($a);
            var_dump($b);
            if(gettype($a)=="integer" and gettype($b)=="integer")
                return $a+$b;
            elseif(gettype($a)=="string" or gettype($b)=="string")
                return $a.$b;
        }

        $var1 = 90;
        $var2 = 80;

        $var2 += 20;

        echo ($var1 <=> $var2);

        if (($var1<=>$var2) == 1){
            echo "var1 is greater";
        }
        else{
            echo "var2 is greater";
        }

        $arr = array(
            "foo"=>"bar", 
            "soo"=>"car",
            3 => "tar"
        );
        
        echo "<pre>";

        print_r($arr);

        $arr[] = "mar";

        print_r($arr);

        $arr[] = ["Ram", "Laxman", "etc"=>"Sita"];

        print_r($arr);

        $arr[5][] = "Bibhisan";
        print_r($arr);

        list("foo"=>$a, "soo"=>$b, 3=>$c, 4=>$d, 5=>$e) = $arr;
        print_r($a);
        echo "<br>";
        print_r($b);
        echo "<br>";
        print_r($c);
        echo "<br>";
        print_r($d);
        echo "<br>";
        print_r($e);
        echo "<br>";

        switch($arr["foo"]){
            case "bar":
                echo "It's bar";
                break;
            case "mar":
                echo "It's mar";
                break;
            default:
            echo "It's default";
        }

        echo "<br>";
        echo add($var1, $var2);
        echo "<br>";
        echo add("Hello", "World");
        echo "<br>";
        echo add("Hello", 2);
        echo "<br>";
        echo "Hello"."2";
        echo "<br>";
        $a2 = 2;
        $b2 = 3;
        echo $a2.$b2;
        echo "<br>";

        //Unset in array
        echo "Unset here";
        unset($arr["foo"]);
        print_r($arr);

        foreach($arr as $i => $value){
             print_r($value);
        }
        $arr = array_values($arr);
        print_r($arr);
        echo "</pre>";
    ?>
</body>

</html>