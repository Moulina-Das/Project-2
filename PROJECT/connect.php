<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','website');

// get the post records
$fame = $_POST['fname'];
$Email = $_POST['Email'];
$password = $_POST['password'];

// database insert SQL code
$sql = "INSERT INTO `sign` (`slno`, `full name`, `email address`, `password`) VALUES ('0', '$fame', '$Email', '$password')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Signup successfully";
}

?>









































