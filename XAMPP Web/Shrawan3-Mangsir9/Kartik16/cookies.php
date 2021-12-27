<?php
//cookie is often used to identify a user
//it is a small file that server embeds on the user's computer
//each time same computer requests a page with a browser it will send the cookie too
//cookies can be created and retrieved via php

//setting a cookie in PHP
//cookies can be set using PHP setcookie() function

//setcookie(name, value, expire, path, domain, secure, httponly);
//Note: The setcookie() function should appear before the <html> tag

$cookie_name = "user";
$cookie_value = "Deshant_Devkota";

setcookie($cookie_name, $cookie_value, time()+86400*30, "/");//"/"  means cookie is available in entire website

?>

<html>
    <body>
        <?php
            if(!isset($_COOKIE[$cookie_name])){
                echo "Cookie named '".$cookie_name."' is not set.";
            }else{
                echo "Cookie '".$cookie_name."' is set. ";
                echo "Value is: ".$_COOKIE[$cookie_name];
            }
        ?>
    </body>
</html>