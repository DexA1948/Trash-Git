<?php
//this file is to validate PHP signup for gyankunja
//if we ever make another sign up page with similar form this can be easily used

// DATABASE CONNECTION
require("db.php");

// types of error stored according to names and displayed
$nameErr = $emailErr = $phonenoErr = $dobErr = $otherinfoErr = $passwordErr = "";
// storing values so not to lose during reload
$name = $email = $phoneno = $dob = $otherinfo = $password = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty(trim($_POST["name"]))) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);

        // check if name only contains letters and whitespace
        // here some checks like checking letters and length can exchange places or be combined
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        } else if (strlen($name) > 100) {
            $nameErr = "Sorry, we don't register name length > 100";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);

        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        } else if (strlen($email) > 200) {
            $emailErr = "Sorry, We don't register email length > 200";

            //now lets ensure that email is unique since it serves as primary key
        } else {

            // QUERY TO CHECK DUPLICATE EMAIL
            $email_query = "SELECT * FROM `gyankunjadb`.`registration_info` WHERE email='$email'";
            $result = mysqli_query($con, $email_query) or die("Error during database connection (Email Query)");
            $rows = mysqli_num_rows($result);

            if ($rows == 1) {
                $emailErr = "This email is already registered, please insert another email";
            }
        }
    }

    if (empty($_POST["phoneno"])) {
        $phonenoErr = "Phone number is required";
    } else {
       $phoneno = test_input($_POST["phoneno"]);

        //only 10 digit mobile numbers from NEPAL are allowed rn
        if (!preg_match("/[0-9]{10}/", $phoneno)) {
            $phonenoErr = "Invalid phone number: 10 digit phone number required (Nepal)";
        }
    }

    if (empty($_POST["dob"])) {
        $dobErr = "Date of Birth is required";
    } else {
        $dob = test_input($_POST["dob"]);

        if (!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $dob)) {
            $dobErr = "Invalid date";
        } else {
            list($year, $month, $day) = explode('-', $dob);

            if ($year < 1920) {
                $dobErr = "Sorry, please enter a date after 1920";
            } else if ($year == date("Y") - 10) {
                $dobErr = "Sorry, seems like you are too young to enter";
            }
        }
    }

    if (empty($_POST["otherinfo"])) {
        $otherinfo = "";
    } else {
        //might change <, > and other special chars 
        $otherinfo = test_input($_POST["otherinfo"]);

        if (strlen($otherinfo) > 500) {
            $otherinfoErr = "Too long (required length <= 500)";
        }
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {

        //not using test_input here so that user can enter whatever he likes
        //this causes to re-enter password everytime page is reloaded 
        $password = $_POST["password"];

        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);

        if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8 || strlen($password) > 40) {
            $passwordErr = 'Password should be at least 8 (max:40) characters in length and should include at least one upper case letter, one number, and one special character.';
        } 
        // USE AJAX !!!!!!
        // else {
        //     $passwordErr = 'Strong password.';
        // }
    }

    // QUERY FOR REGISTRATION
    // if no error register user
    if ($nameErr === "" && $emailErr === "" && $phonenoErr === "" && $dobErr === "" && $otherinfoErr === "" && $passwordErr === "") {
        $created_time = date("Y-m-d H:i:s");
        $query = "INSERT INTO `gyankunjadb`.`registration_info` (name, email, phoneno, dob, otherinfo, password, created_time) VALUES ('$name', '$email', '$phoneno', '$dob', '$otherinfo', '" . md5($password) . "', '$created_time')";
        $result = mysqli_query($con, $query) or die("Error during database connection (Registration Query)");

        if($result){
            // SUCESSFUL_REGISTRATION_REDIRECT
            header("Location: successful_registration.php");
        }
    }
}

function test_input($data)
{
    global $con;
    $data = trim($data); //remove whitespaces, newline, tabs
    $data = stripslashes($data); //remove \
    $data = htmlspecialchars($data); //convert <, > to &lt;, &gt;
    $data = mysqli_real_escape_string($con, $data);
    return $data;
}

// // useful to check the $_POST array to see errors
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

?>