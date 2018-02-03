<?php 
session_start();
include "connector.php";


$username= $_POST['username'];
$pass= $_POST['pass'];

$username = stripcslashes($username);
$pass = stripcslashes($pass);
$username = mysqli_real_escape_string($con,$username);
$pass = mysqli_real_escape_string($con,$pass);

$sql= "select * from user where username='$username' and cpass='$pass'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

	if ($row ['username']== $username && $row ['cpass']== $pass){
	$_SESSION['username'] = $username;
	header('location:profile.php');
}
else{
	
	header('location:login_failed.php');
	}
?>


