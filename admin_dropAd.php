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

if(!empty($_SESSION['adminID'])){
		$adminID= $_SESSION['adminID'];
		$id = $_GET['id'];
		$type= $_GET['type'];

	if($type=='f'){
		mysqli_query($con,"DELETE FROM found WHERE id='$id'");
		echo '<h1>Selected Ad Dropped!<br>
				<a href="adsdb.php">Back</a></h1>';
	} 

	elseif ($type=='l') {	
		mysqli_query($con,"DELETE FROM lost WHERE id='$id'");
		echo '<h1>Selected Ad Dropped!<br>
				<a href="adsdb.php">Back</a></h1>';
	} 

	else{
		echo '<h1>Error: Contact to Developer!<br>
				<a href="adsdb.php">Back</a></h1>';
	}
} 
else{
	header('location: index.php');
}

?>
