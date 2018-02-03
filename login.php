<?php 
session_start();
?>
<link rel="stylesheet" type="text/css" href="login.css">
<div><?php include 'header.php'; ?></div>

  <div id="bodycontent">
    <div id="left">
      <img src="site_img/11.png" id="img">
    </div>
    <div id="right">
      <h2><center>  Sign in </center></h2>
  <form action="login_process.php" method="POST">
    <div>
    <input type="text" placeholder="User ID" id="username" name="username" required="" />
    </div>

    <div>
    <input type="password" placeholder="Password" id="pass" name="pass" required="" />
    </div>  

    <input type="submit" name="submit" id="sbtn" value="Login" /> 
        
        <p style="color: white; text-align: center;">Don't have a account.?</p>
    <input type="button" id="btn" value="Register Now" onClick="window.location.href='form.php'"/>       
  </form>
    </div>

 	</div>
<?php
	if (isset($_POST['submit'])) {
		include ("login_process.php");
		session_start();
	}
?>
<div><?php include'footer.php'; ?></div>

