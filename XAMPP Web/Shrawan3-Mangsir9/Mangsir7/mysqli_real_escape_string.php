<?php
$con = mysqli_connect("localhost", "root", "", "gyankunjadb");

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: ". mysqli_connect_errno();
    exit();
}

$lastname = "DOre";
$date = date('Y-m-d H:i:s');
$query = "INSERT INTO `gyankunjadb`.`users` (firstname, lastname, email, phoneno, dob, otherinfo, password, create_datetime) VALUES ('Deshant2', '$lastname', 'devkotadexant2@gmail.com', '9802206057', '2020-11-23', 'heheh', 'secret', '$date')";
$result = mysqli_query($con, $query);

// This query will fail, cause we didn't escape $lastname
if ($result) {
    printf("%d Row inserted.\n", mysqli_affected_rows($con));
}

echo mysqli_connect_errno();
?>