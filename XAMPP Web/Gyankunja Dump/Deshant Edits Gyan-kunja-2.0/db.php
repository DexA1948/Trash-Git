<?php
    //mysqli_connect($hostname, $database_username, $password, $databse_name)
    $con = mysqli_connect("localhost", "root", "", "gyankunjadb");

    //check connection
    if(mysqli_connect_errno()){
        echo "Failed to connect to MySql: ".mysqli_connect_error();
    }
?>