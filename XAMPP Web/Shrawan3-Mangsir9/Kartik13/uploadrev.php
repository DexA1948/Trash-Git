<?php

$upload_dir = "uploaddir/";

$upload_path = $upload_dir.basename($_FILES["photoToUpload"]["name"]);

$imageType = strtolower(pathinfo($upload_path, PATHINFO_EXTENSION));

$uploadOk = 0;

//check if file is actually image
if(isset($_POST["submit"])){
    //getimagesie() also returns a array(6)
    $check = getimagesize($_FILES["photoToUpload"]["tmp_name"]);

    if($check !== false){
        echo "File is an image".$check["mime"].".";
        $uploadOk = 1;
    }else{
        echo "Error:File is not an image.";
        $uploadOk = 0;
    }
}

//check if file already exists
if(file_exists($upload_path)){
    echo "Error:File already exists.";
    $uploadOk = 0;
}

//check image size 
if($_FILES["photoToUpload"]["size"]>500000){
    echo "Error:File size is too large.";
    $uploadOk = 0;
}

//check valid extensions
if($imageType != "jpg" && $imageType!="jpeg" && $imageType!="png"){
    echo "Error:File is not jpg, jpeg or png";
    $uploadOk = 0;
}

if($uploadOk==1){
    if(move_uploaded_file($_FILES["photoToUpload"]["tmp_name"], $upload_path)){
        echo "File is successfully uploaded".htmlspecialchars(basename($_FILES["photoToUpload"]["name"]));
    }else{
        echo "Error:Error occured during uploading file.";
    }
}else{
    echo "Error:Sorry, the file couldn't be uploaded";
}