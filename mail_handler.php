<?php
// the message
$name=$_POST['name'];
$email=$_POST['email'];
$sub=$_POST['subject'];
$msg=$_POST['msg'];

// use wordwrap() if lines are longer than 70 characters
//$msg = wordwrap($msg,70);

$to='support@lostnfound.cf'; // admin/support Email ID
$subject='SUPPORT : LostnFound';
$message="Name : ".$name."\n"."Email : ".$email."\n"."Subject : ".$sub."\n\n"."Wrote the following :"."\n".$msg;

// send email
mail($to,$subject,$message);

echo "<script type='text/javascript'>alert('Mail Sent to Support for Review..')</script>";
echo '<script type="text/javascript">window.location.href = "contactUs.php";</script>';
?> 