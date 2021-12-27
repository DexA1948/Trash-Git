<?php
    $age = 18;

    $result = match ($age) {
        19 => 'senior',
        18 => 'adult',
        16 => 'young adult',
        default => 'kid',
    };

    var_dump($result);
    echo "<br>".$result."<br>";
?>