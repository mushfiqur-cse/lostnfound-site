<?php 
session_start();
?>

<link rel="stylesheet" type="text/css" href="form.css">

<div><?php include 'header.php'; ?></div>

  <div id="bodycontent">

    <div id="left">
      <img src="site_img/11.png" id="img">
    </div>
    
    <div id="right">
      <h2><center>Sign up</center></h2>
  <form action="form_process.php" method="POST" onsubmit="return Validate()" name="vForm">
    
    <div>
      <input type="text" placeholder="First Name" name="firstname" required="" />
    </div>
   
    <div>
      <input type="text" placeholder="Last Name" name="lastname" />
    </div>
   
    <div>
      <input type="email" placeholder="E-mail" name="email" required="" />
    </div>
    
    <div>
      <input type="text" placeholder="Contact no " name="contact" pattern="[0-9]{2,30}" required="" />
    </div>

    <div>
      <input type="text" placeholder="User ID" name="username"  pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{3,30}$" required="" />
    </div>

    <div>
      <input type="password" placeholder="Password" name="pass" required=""/>
    </div>
    
    <div>
      <input type="password" placeholder="Confirm Password" name="cpass" required="" />
      <div id="password_error" class="val_error"></div>
    </div>
    
    <div>
      <input type="text" placeholder="Write something about you.." name="info" />
    </div>

    <div>
      <input type="submit" name="submit" value="Submit" />
    </div>

  </form>
    </div>
  </div> 
  
<div><?php include'footer.php'; ?></div>


<script type="text/javascript">
  // GETTING ALL INPUT TEXT FIELDS
  var password = document.forms["vForm"]["pass"];
  var password_confirmation = document.forms["vForm"]["cpass"];
  
  // GETTING ALL ERROR OBJECTS
  var password_error = document.getElementById("password_error");

  function Validate(){
    // VALIDATE PASSWORD
    if (password.value != password_confirmation.value) {
      password_error.textContent = "The two passwords do not match!";
      password.style.border = "1px solid red";
      password_confirmation.style.border = "1px solid red";
      password.focus();
      return false;
    }
    // PASSWORD REQUIRED
    if (password.value == "" || password_confirmation.value == "") {
      password_error.textContent = "*Password required";
      password.style.border = "1px solid red";
      password_confirmation.style.border = "1px solid red";
      password.focus();
      return false;
    }
  }
</script>