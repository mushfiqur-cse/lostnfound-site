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
  <form action="login_process.php" method="POST" onsubmit="return Validate()" name="vForm">
    <div>
    <input type="text" placeholder="User Name" id="username" name="username" />
    <div id="uname_error" class="val_error"></div>
    </div>

    <div>
    <input type="password" placeholder="Password" id="pass" name="pass" />
     <div id="password_error" class="val_error"></div>
    </div>  
    <p style="color:red; margin-top: 0px; margin-bottom: 0px;">User ID & password mis-matched!</p>
    <input type="submit" name="submit" id="sbtn" value="Login" /> 
        
        <p style="color: white; text-align: center;">Don't have a account.?</p>
    <input type="button" id="btn" value="Register Now" onClick="window.location.href='form.php'"/>       
  </form>
    </div>
  </div>
<div><?php include'footer.php'; ?></div>

<script type="text/javascript">
  // GETTING ALL INPUT TEXT FIELDS
  alert("User ID or Password miss-matched "); 

  var username = document.forms["vForm"]["username"];
  var password = document.forms["vForm"]["pass"];

  // GETTING ALL ERROR OBJECTS
  var uname_error = document.getElementById("uname_error");
  var password_error = document.getElementById("password_error");

  // SETTING ALL EVENT LISTENERS
  username.addEventListener("blur", unameVerify, true);
  password.addEventListener("blur", passVerify, true);

  function Validate(){
    // VALIDATE
    if(username.value == ""){
      uname_error.textContent = "*Username is required";
      username.style.border = "1px solid red";
      username.focus();
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
  
  function unameVerify(){
    if (username.value != "") {
      uname_error.innerHTML = "";
      username.style.border = "1px solid #110E0F";
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
