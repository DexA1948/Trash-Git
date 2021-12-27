<?php
session_start();

$form =  <<<FORM
<form method="post">
    <input type="submit" value="Log Out" name="logout">
</form>
FORM;

if(isset($_POST["logout"])){
    session_unset();
    session_destroy();
    echo "You Logged Out";
}else if(isset($_SESSION["name"])){
    echo "Hello".$_SESSION["name"];
    echo $form;
}else{
    echo "You must login first to logout. Head to <a href=\"login.php\">login page</a>";
}
?>

