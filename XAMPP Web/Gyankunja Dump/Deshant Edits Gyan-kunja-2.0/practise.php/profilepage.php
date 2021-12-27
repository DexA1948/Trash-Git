<?php
session_start();

echo "Hello".$_SESSION["name"]."<br>Your are logged in. <br>Head to <a href=\"homepage.php\">Home page</a><br>Or, Head to <a href=\"logout.php\">Logout page</a>";
?>