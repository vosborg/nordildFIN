<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', 'root','nordild');

// get the post records
$txtName = $_POST['username'];
$txtEmail = $_POST['email'];
$txtPhone = $_POST['phone'];

// database insert SQL code
$sql = "INSERT INTO `register` (`username`, `email`, `phone`) VALUES ('$txtName', '$txtEmail', '$txtPhone')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Tak for beskeden, du er nu tilmeldt. ";
}
?>