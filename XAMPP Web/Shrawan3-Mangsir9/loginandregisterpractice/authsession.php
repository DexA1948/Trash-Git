<?php
    session_start();

    if(!isset($_SESSION["username"])){
        header("Location: login.php");
        exit();
    }

?>


<?php
    //NOTES:
    //isset(mixed $var, mixed $var, mixed.......$vars): bool
    //isset returns bool
    //true if none of given parameters are null else if anyone is unset it returns false

    //$_SESSION is an associative array containing session variables available to the current script. It is a superglobal variable and is available in all scopes throughout a script


    //session_start(array $options=[]): bool {start or resume existiing session}
    //session_start() creates a session or resumes the current one based on a session identifier passed via a GET or POST request, or passed via a cookie.

?>