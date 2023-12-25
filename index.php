<?php
// login_process.php
$username = $_POST['username'];
$password = $_POST['password'];

if (isset($_POST['btntest']))

{
$host="localhost";
$user="root";
$password="123456";
$db="therapy_reservation";

$conn= mysqli_connect($host,$user,$password,$db);

$insert="insert into 'login' ("User Name","Password")  values('$UserName','$password')";

mysqli_query($conn,$insert);

if ($username != null) {
  // Successful login
  header('Location: home.html');
  exit;
} else {
  // Invalid credentials
  echo 'Invalid username or password.';
}
}
?>