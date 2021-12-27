<?php

// validate = returns false if consists of illegal characters
// sanitize = removes illegal character from data

// filter_var() function can be used to both validate and sanitize data
// Takes two parameters: variable and type of check on variable


$str = "<h1>Hello World</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;

?>