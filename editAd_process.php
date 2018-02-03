<?php
	session_start();
	include "connector.php";
	
	if(!empty($_SESSION['username'])){
	  $user_name=$_SESSION['username'];

    $sql_found = "select * from found";
    $sql_lost = "select * from lost";

    $res_found = mysqli_query($con, $sql_found);
    $res_lost = mysqli_query($con, $sql_lost);

	$id = $_GET['id'];
	$cattype= $_GET['type'];
	
	$title=$_POST['title'];
	$details=$_POST['details'];


	if($cattype=='f'){
	  $update_titile=$_POST['titile'];
	  $update_cattype=$_POST['cattype'];
      $update_details=$_POST['details'];

      $update_email=$_POST['email'];
      $update_contact=$_POST['contact'];
      
      $update_sql_found= "UPDATE found set title='$update_title', type='$update_cattype', details='$update_details' where username='$username'";
			echo '<h1>Successfully Found Post Updated!<br>
			<a href="myAds.php">Back</a></h1>';
			

	} else if ($cattype=='l') {
	  $update_titile=$_POST['titile'];
	  $update_cattype=$_POST['cattype'];
      $update_details=$_POST['details'];

      $update_email=$_POST['email'];
      $update_contact=$_POST['contact'];

		$update_sql_lost= "UPDATE lost set title='$update_title', type='$update_cattype', details='$update_details' where username='$username'";

			echo '<h1>Successfully Lost Post Updated!<br>
			<a href="myAds.php">Back</a></h1>';
	}
	else{
		echo '<h1>ERROR!<br>
			<a href="myAds.php">Back</a></h1>';
	}

	} 
	else{
	   header('location: index.php');
	}
	
?>
