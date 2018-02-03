<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Result</title>
<style type="text/css">
	body{
		text-align: center;
		margin: 15% auto;
	}
	h1{
		font-size: 50px;
		color: green;
		text-align: center;
	}
</style>
</head>
<body>
<?php
include "connector.php";

  if(!empty($_SESSION['username'])){
  $username=$_SESSION['username'];

   $sql= "select * from user where username='$username'";
   $result = mysqli_query($con,$sql);
   $row = mysqli_fetch_array($result);

	$id = $_GET['id'];
	$type= $_GET['type'];

	if($type=='f'){
			mysqli_query($con,"DELETE FROM found WHERE id='$id'");
			echo '<h1>Your Found Item Dropped!<br>
				<a href="myAds.php">Back</a></h1>';
	} else if ($type=='l') {
			mysqli_query($con,"DELETE FROM lost WHERE id='$id'");
			echo '<h1>Your Lost Item Dropped!<br>
				<a href="myAds.php">Back</a></h1>';
	} else {
			echo '<h1>Your post can NOT be dropped!<br>
				<a href="myAds.php">Back</a></h1>';
	}

} 
  else{
   header('location: index.php');
}
?>
</body>
</html>
