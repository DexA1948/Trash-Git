<?php

$passwordErr = "";
$password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST["password"];
    $specialChars = preg_match('@[^\w]@', $password);

    if (!$specialChars) {
        $passwordErr = "Please enter valid characters";
    }
}

function test_input($data)
{
    $data = trim($data);//remove whitespaces, newline, tabs
    $data = stripslashes($data);//remove \
    $data = htmlspecialchars($data);//convert <, > to &lt;, &gt;
    return $data;
}

echo test_input($password);
?>
<style>
    .error{
        color:tomato;
    }
</style>

<form  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<span class="error">* <?php echo $passwordErr;?> </span><br>
Password:<input type="password" name="password" id="password" value="<?php echo $password; ?>">
    <br><input type="submit" value="Submit">
</form>