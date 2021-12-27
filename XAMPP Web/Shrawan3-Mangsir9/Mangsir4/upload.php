<pre>
<?php
$upload_dir = "uploaddir/";

$photoToUpload = $upload_dir.$_FILES["photoToUpload"]["name"];

$image_type = strtolower(pathinfo($photoToUpload, PATHINFO_EXTENSION));

$upload_ok = 1;

//check if file is actually image
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["photoToUpload"]["tmp_name"]);

    if($check !== false){
        echo "File is an image - ".$check["mime"].".";
        $upload_ok = 1;
    }else{
        echo "Error0: File is not an image";
        $upload_ok = 0;
    }
}

//check if image already exists
if(file_exists($photoToUpload)){
    echo "Error1: Sorry, file already exists";
    $upload_ok = 0;
}

//check image size
if($_FILES["photoToUpload"]["size"]>500000){
    echo "Error2: Sorry, file is too large to upload";
    $upload_ok = 0;
}

//check image type
if($image_type !== "jpg" && $image_type !== "jpeg" && $image_type !== "png" ){
    echo "Error3: Image is not jpg, jpeg or png";
    $upload_ok = 0;
}

//move uploaded file if $upload_ok = 1
if($upload_ok==1){
    if(move_uploaded_file($_FILES["photoToUpload"]["tmp_name"], $photoToUpload)){
        echo "Success: Image ".$_FILES["photoToUpload"]["name"]." is uploaded";
    }else{
        echo "Error4: Sorry error occured during upload";
    }
}else{
    echo "Sorry image couldn't be uploaded";
}

?>
</pre>