<?php

//creating a file
//using fopen() for write, append or x=create creates a file
$file = fopen("createfile.txt", "w");

//text to write into file
$txt = "Hello World \n";

//writing to a file using fwrite()
fwrite($file, $txt);

readfile("createfile.txt");

$txt = "Hello World 2 \n";
fwrite($file, $txt);

//close the file after open and work
fclose($file);

readfile("createfile.txt");
?>

