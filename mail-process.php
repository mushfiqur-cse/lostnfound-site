<?php
session_start();

	include "connector.php";
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$msg = $_POST['msg'];


	$sql = "INSERT INTO mailbox (name, subject, email, msg) VALUES ('$name','$subject','$email','$msg')";

	if (!mysqli_query($con,$sql)) { 
		echo "Connection Lost!";
	}
	else {
		echo "<script type='text/javascript'>alert('Mail Sent to Admin for Review..')</script>";
		echo '<script type="text/javascript">window.location.href = "contactUs.php";</script>';
	}

?>



<!-- <script type="text/javascript">
	function welcome(x){
		alert("Thank You " +x "..</br>Your message has sent to admin..");	
	}
	welcome("<?php echo $name;?>!");
</script> -->
