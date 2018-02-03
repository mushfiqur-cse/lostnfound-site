<?php
session_start();

	include "connector.php";

	$username = $_SESSION['username'];
	$sql= "select * from user where username='$username'";

	$contact = $_POST['contact'];
	$email = $_POST['email'];
	//$contact= $row['contact'];
	
	$type = $_POST['ptype'];
	$title = $_POST['title'];
	$details = $_POST['details'];


	if($type == "Lost"){
	 	$sql = "INSERT INTO lost(username, contact, email, type, title, details) VALUES ('$username', '$contact', '$email', '$type', '$title', '$details')";
	}
	elseif ($type == "Found") {
		$sql = "INSERT INTO found(username, contact, email, type, title, details) VALUES ('$username', '$contact', '$email', '$type', '$title', '$details')";
	}


	if (!mysqli_query($con,$sql)) { 

		echo "<h1>Your post can not be submitted!</h1>";
		//header("refresh:5;url=post.php");
	}
	else {
		header('location:success_post.php');	
	}
		
?>




