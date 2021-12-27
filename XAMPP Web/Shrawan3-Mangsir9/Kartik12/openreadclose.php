<?php
//first open a file using fopen() and different modes
//then read file using different available functions such as fread(), fgets(), fgetc(), feof()
//then close the file

//depending on modes pointers will be on different places
//r, w, a, x, r+, w+, a+, x+

$file = fopen('readthis.txt', 'x') or die("Unable to open file!");

while(!feof($file)){
    echo fgetc($file).'<br>';
}

fclose($file);

?>