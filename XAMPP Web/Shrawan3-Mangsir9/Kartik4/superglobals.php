<?php
//superglobals are available everywhere in the script
//LIST OF SUPERGLOBALS:
//$GLOBALS
//$_SERVER
//$_REQUEST
//$-POST
//$_GET
//$_FILES
//$_ENV
//$_COOKIE
//$_SESSION

?>

<?php
//$GLOBALS
$x=75;

function mul2(){
    return $GLOBALS['x']*2;
}

echo mul2();
?>

<hr>

<?php
//$_SERVER
//$_SERVER holds information about headers, paths and script locations

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['GATEWAY_INTERFACE'];
echo "<br>";
echo $_SERVER['SERVER_ADDR'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['SERVER_SOFTWARE'];
echo "<br>";
echo $_SERVER['SERVER_PROTOCOL'];
echo "<br>";
echo $_SERVER['REQUEST_METHOD'];
echo "<br>";
echo $_SERVER['REQUEST_TIME'];
echo "<br>Query String:";
echo $_SERVER['QUERY_STRING'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>

<hr>

<form action="form.php" method="POST">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>

<hr>

<!--
$_GET can be used to collect data after submitting forms with method="get"
but it also can be used to send data in url as in example below
here we append data to be sent in url so target page can use $_GET[index] to access data sent embedded in URL
-->
<a href="test_get.php?Subject=PHP&fname=Deshant">TEST $_GET</a>
