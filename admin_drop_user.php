<?php
	session_start();
?>
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
<?php
include "connector.php";
$id = $_GET['id'];

if($id){
		mysqli_query($con,"DELETE FROM user WHERE id='$id'");
		echo '<h1>Selected User Profile Dropped!<br>
				<a href="userdb.php">Back</a></h1>';
}else {
		echo '<h1>Error: Contact to Your Developer!<br>
				<a href="userdb.php">Back</a></h1>';
}
?>

