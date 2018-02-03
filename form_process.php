<?php
session_start();

	include "connector.php";
	
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$username = $_POST['username'];
	$pass = $_POST['pass'];
	$cpass = $_POST['cpass'];
	$info = $_POST['info'];
	$img = (isset($_POST['req_img']));


	$sql = "INSERT INTO reg_req(req_firstname, req_lastname, req_email, req_contact, req_username, req_pass, req_cpass, req_info, req_img) VALUES ('$firstname','$lastname','$email','$contact','$username','$pass','$cpass','$info','$img')";

	if (!mysqli_query($con,$sql)) { 
		header('location:failed_reg.php');
	}
	else {
		header('location:success_reg.php');
	}

?>




