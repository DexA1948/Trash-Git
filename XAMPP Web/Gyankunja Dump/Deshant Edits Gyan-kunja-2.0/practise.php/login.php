<!-- <?php
session_start();

if(isset($_SESSION["name"])){
    echo "Hello".$_SESSION["name"]."<br>Your are logged in. Head to <a href=\"profilepage.php\">profile page</a>";
}else if(isset($_POST["name"])){
    $_SESSION["name"] = $_POST["name"];
    echo "You are now logged in";
}else{
?>
<form method="post">
    <input type="text" name="name" id="name">
    <input type="checkbox" name="terms" id="terms">
    <input type="submit" value="Login" name="login">
</form>
<?php
}
?>
 -->

<pre>
<?php
    print_r($_POST);

    $termsErr = "";

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        if (empty($_POST["terms"])) {
            $termsErr = "You must agree to our terms of use and privacy policy to continue";
        } else {
           $terms = $_POST["terms"];
    
            if ($terms!=="on") {
                $termsErr = "You must agree to our terms of use and privacy policy to continue";
            }
        }
        
    }
    
?>
</pre>

<form method="post">
    <input type="text" name="name" id="name">
    <br><input type="checkbox" name="terms" id="terms"><br>
    <div><?php echo $termsErr; ?></div>
    <input type="submit" value="Login" name="login">
</form>


