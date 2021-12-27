<?php
$name = "";
if($_SERVER['REQUEST_METHOD']=="POST"){
    $name = $_POST["fname"];
}
?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
Name: <input type="text" name="fname" value="<?php echo $name;?>">
Age: <input type="text" name="age">
<input type="submit" value="Submit">
</form>