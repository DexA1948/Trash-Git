<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
        echo date_default_timezone_get();
        echo "<br/>";
        date_default_timezone_set("Asia/Kathmandu");
        echo date_default_timezone_get();
        echo "<br/>";
        echo date(DATE_COOKIE);
        echo "<br/>";
        $dayofweek = date("D");

        switch($dayofweek){
            case "Sun":
                echo "It Sunday Woooohooooooooo";
        }
    ?>
</body>
</html>