<?php

//specifies the directory where the file is going to be placed
$target_dir = "uploads/";

//this PHP superglobal must store the files using post in array name=value
echo "<pre>";
var_dump($_FILES);
var_dump($_REQUEST);
var_dump($_POST);
echo "</pre>";

//specifies the path of the file to be uploaded
$target_file = $target_dir . basename(($_FILES["fileToUpload"]["name"]));

$uploadOk = 1;

//extension of file in lowercase
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

//check if image file is actual image of fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

    echo "<pre>";
    var_dump($check);
    echo "</pre>";

    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

//check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

//check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

//Allow certain file formats
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

//check if $uploadOk is set to 0 by any error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";

    //if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file" . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . "has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
