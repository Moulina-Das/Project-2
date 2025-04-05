<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','website');

// get the post records

$email = $_POST['email'];
$password = $_POST['password'];

// database insert SQL code
$sql = "INSERT INTO `login` (`slno`,  `email address`, `password`) VALUES ('0',  '$email', '$password')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Signup successfully";
}

?>
