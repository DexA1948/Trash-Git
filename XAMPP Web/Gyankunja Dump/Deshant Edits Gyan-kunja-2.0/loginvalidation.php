<?php
session_start();

// DATABASE CONNECTION
require("db.php");

// to store errors
$emailErr = $passwordErr = "";
// storing values so not to lose during reload
$email = $password = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);

        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) > 200) {
            $emailErr = "Invalid email format";
        } else {

            // QUERY TO CHECK REGISTERED EMAIL
            $email_query = "SELECT * FROM `gyankunjadb`.`registration_info` WHERE email='$email'";
            $eq_result = mysqli_query($con, $email_query) or die("Error during database connection (Email Query)");
            $eq_rows = mysqli_num_rows($eq_result);

            if ($eq_rows == 1) {
                $emailErr = "";
            } else {
                $emailErr = "This email is not registered";
            }
        }
    }//email_validation

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
        } else {

            // QUERY TO CHECK CORRECT PASSWORD
            $password_query = "SELECT password FROM `gyankunjadb`.`registration_info` WHERE email='$email' AND password='".md5($password)."'";
            $pq_result = mysqli_query($con, $password_query) or die("Error during database connection (Email Query)");
            $pq_rows = mysqli_num_rows($pq_result);

            if ($pq_rows == 1) {
                $passwordErr = "";
            } else {
                $passwordErr = "Incorrect Password";
            }
        }
    }//password_validation

    // if no error found in both email query and password query
    if($emailErr=="" && $passwordErr==""){
        $_SESSION["email"] = $email;
        $_SESSION["loggedin"] = true;
        
        // Redirecting AFTER LOGGED IN
        header("Location: profilepage.php");
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

// useful to check the $_POST array to see errors
echo "<pre>";
print_r($_POST);
print_r($_SESSION);
echo "</pre>";
