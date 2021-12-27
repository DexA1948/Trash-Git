<?php
include "includes/classautoloader.inc.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Person and House Address</title>
</head>
<body>
    <?php
        $person = new Person\Person("Deshant", "21");
        echo $person->getPerson();
        echo "<br>";
        $house = new House("Kshetrapur", 12345);
        echo $house->getAddress();
    ?>
</body>
</html>