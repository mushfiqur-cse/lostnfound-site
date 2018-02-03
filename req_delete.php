<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Result: Deleted</title>
	<style type="text/css">
		body{
			text-align: center;
			margin: 15% auto;
		}
		h1{
			font-size: 50px;
			color: red;
			text-align: center;
		}
	</style>
</head>
<body>
<?php
	include "connector.php";

	$id = $_GET['req_id'];

	if($id){
			mysqli_query($con,"DELETE FROM reg_req WHERE req_id='$id'");
			echo '<h1>Selected User Registration Request Dropped!<br>
				<a href="reg_req.php">Back</a></h1>';
			//header("refresh:5;url=reg_req.php");
	}else {
			echo '<h1>Error: Contact to Your Developer!<br>
					<a href="reg_req.php">Back</a></h1>';
			//header("refresh:8;url=reg_req.php");
	}
?>
</body>
</html>
