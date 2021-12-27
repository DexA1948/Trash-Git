<?php 
$string = "Visit Schoolsee W3Schools";
$pattern = ".\bSchools+.";
echo $pattern;
echo preg_replace($pattern, "Microsoft", $string);
?>