<?
//Connecting Database
$database_name = "";
$con = mysqli_connect("localhost", "root", "", $database_name);

if(mysqli_errno($con)){
echo "Failed to Connect";
}
?>