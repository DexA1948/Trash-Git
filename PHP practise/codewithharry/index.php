<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        This is my first website.
    </div>

    <?php
        echo "Hello World";

        //secret algorithm
        /*Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut beatae error enim mollitia, placeat doloremque soluta? Veritatis nulla provident exercitationem repellat eius voluptatum, sint odio labore id quo in animi eum asperiores aperiam error!*/

        $variable1 = 100;
        $variable2 = 330;
    
        echo "<br>";
        Echo $variable1;
        echo "<br>";
        Echo $variable2;
        echo "<br>";
        Echo $variable1+$variable2;

        //operatos in php
        //Arithmetic Operators
        echo "<br>";
        echo "The sum of variable 1 and 2 is ";
        echo $variable1+$variable2;
        echo "<br>";
        echo "The difference of variable 1 and 2 is ";
        echo $variable1-$variable2;
        //Assignment operators
        echo "<br>";
        $newvariable = $variable1;
        $newvariable *= 3;
        echo $newvariable;

    ?>    
</body>
</html>
