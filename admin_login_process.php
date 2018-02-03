<?php 
session_start();

include "connector.php";

$adminID= $_POST['adminID'];
$pass= $_POST['pass'];

$adminID = stripcslashes($adminID);
$pass = stripcslashes($pass);
$adminID = mysqli_real_escape_string($con,$adminID);
$pass = mysqli_real_escape_string($con,$pass);

$sql= "select * from admin where adminID='$adminID' and cpass='$pass'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

	if ($row ['adminID']== $adminID && $row ['cpass']== $pass){
	$_SESSION['adminID'] = $adminID;
	header('location:admin_profile.php');
}			
else{
	header('location:admin_login_failed.php');
	
	}
?>