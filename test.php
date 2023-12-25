<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','therapy reservation');

// get the post records
$txtName = $_POST['User Name'];
$txtEmail = $_POST['Password'];


// database insert SQL code
$sql = "INSERT INTO `login` (`Name`, `Password`) VALUES ('$txtName','$txtEmail')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>