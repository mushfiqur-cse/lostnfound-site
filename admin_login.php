<?php 
session_start();
?>
<link rel="stylesheet" type="text/css" href="login.css">

<div><?php include 'header.php'; ?></div>

  <div id="bodycontent">
    <div id="left">
      <img src="site_img/22.png" id="img">
    </div>
    <div id="right">
      <h2><br>ADMIN</h2><br>
  <form action="admin_login_process.php" method="POST" onsubmit="return Validate()" name="vForm">
    <div>
    <input type="text" placeholder="ADMIN ID" id="adminID" name="adminID" required="" />
    <div id="aID_error" class="val_error"></div>
    </div>

    <div>
    <input type="password" placeholder="Password" id="pass" name="pass" required="" />
     <div id="password_error" class="val_error"></div>
    </div>  
    <input type="submit" name="submit" id="sbtn" value="Login" /> 
           
  </form>
    </div>

 	</div>
<?php
	if (isset($_POST['submit'])) {
		include ("admin_login_process.php");
		session_start();
	}
?>

 <div><?php include 'footer.php'; ?></div>


<script type="text/javascript">
  // GETTING ALL INPUT TEXT FIELDS
 
  var adminID = document.forms["vForm"]["adminID"];
  var password = document.forms["vForm"]["pass"];

  // GETTING ALL ERROR OBJECTS
  var aID_error = document.getElementById("aID_error");
  var password_error = document.getElementById("password_error");

  // SETTING ALL EVENT LISTENERS
  adminID.addEventListener("blur", aIDVerify, true);
  password.addEventListener("blur", passVerify, true);

  function Validate(){
    // VALIDATE
    if(adminID.value == ""){
      aID_error.textContent = "*ADMIN ID is required";
      adminID.style.border = "1px solid red";
      adminID.focus();
      return false;
    }
    // PASSWORD REQUIRED
    if (password.value == "") {
      password_error.textContent = "*Password required";
      password.style.border = "1px solid red";
      password.focus();
      return false;
    }
  }
  // ADD EVENT LISTENERS
  
  function aIDVerify(){
    if (adminID.value != "") {
      aID_error.innerHTML = "";
      adminID.style.border = "1px solid #110E0F";
      return true;
    }
  }
  function passVerify(){
    if (password.value != "") {
      password_error.innerHTML = "";
      password.style.border = "1px solid #110E0F";
      return true;
    }
  }
</script>