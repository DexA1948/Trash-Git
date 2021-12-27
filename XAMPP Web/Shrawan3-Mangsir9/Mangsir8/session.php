<?php 
session_start();
?>
<html>
    <head>
        <title>php $_SESSION</title>
    </head>

    <body>
        <?php 
        $_SESSION["email"] = "dexant9t@gmail.com";

        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";
        ?>
    </body>

    <?php
    session_unset();
    session_destroy();
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
    ?>
</html>