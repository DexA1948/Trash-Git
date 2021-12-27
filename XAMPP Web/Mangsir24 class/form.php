<?php 
$name = $_REQUEST["name"];
$contact = $_REQUEST["contact"];
$email = $_REQUEST["email"];
$address = $_REQUEST["address"];

echo "My name is: ".$name.", with an email id of ".$email.". My contact number is ".$contact." and I am from ".$address.".";
?>