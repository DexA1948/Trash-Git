<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <img src="bg.jpg" alt="IIT Kharagpur" class="bg">
    <div class="container">
        <h1>Welcome to Vedas Trip Form</h1>
        <p>Enter your details and submit this form to confirm your participation in the trip</p>

        <?php
        $insert = false;
        if($insert == true){
            echo "<p class='submitMSg'>Thanks for submitting your form. We are happy to see you joining us for the trip</p>";
        }
        ?>

        <form action="index.php" method="POST">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your Email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="9" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button>
            <!-- <button class="reset">Reset</button> -->
        </form>
    </div>

    <script src="index.js"></script>
</body>

</html>

<!-- 
Post: Secure, Used to send passwords
Get: Data Sent is Shown In Url 
-->

<?php

//check for connection
if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";

    //Create a database connection
    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("Connection to this database failed due to".mysqli_connect_error());
    }
    // echo "Sucess connecting to DataBase";

    //Collect post variables
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $other = $_POST['desc'];

    $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp());";


    // Execute the Query
    if($con->query($sql) == true){
        //flag for succesful insertion 
        $submit = true;

        // `echo "Succesfully inserted";`
    }
    else{
        // echo "ERROR $sql <br> $con->error";
    }
    
    //close the database connection
    $con->close();
}
?>