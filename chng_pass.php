<?php
  session_start();  
  include "connector.php";
  if(!empty($_SESSION['username'])){
    $username=$_SESSION['username'];           
    $sql= "select * from user where username='$username'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
    $img= $row['img'];
  }
  else{
      header('location: index.php');
    }
?>

<link rel="stylesheet" type="text/css" href="profile.css">

<div><?php include 'header.php'; ?></div>

  <div id="bodycontent">
  	<div id="photo">
      <?php 
        $result = mysqli_query($con,"select * from user where username='$username'");
        while($row = mysqli_fetch_assoc($result)){
          if($row['img'] == ""){
            echo "<img id='img' src='user_img/default.png' alt='Default Photo'>";
          } else {
            echo "<img id='img' src='user_img/".$row['img']."' alt='Profile Pic'>";
          }
          echo "<br>";
        }
      ?>
    </div>
  	<div id="details">

<form action="chng_pass_process.php" method="post" onsubmit="return Validate()" name="vForm">
    <div id="table">
    	<table border="0" cellpadding="10%" cellspacing="10%" >
            <tr>
                <td>New Password</td>
                <td><input type="Password" name="newpass"></td>
            </tr>
            <tr>
                <td>Confirm Password</td>
               <td> <input type="Password" name="c_newpass" ></td>
               <td><span id="password_error" class="val_error" style="color: red"></span></td>
            </tr>

            <tr>
              <td><a href="profile.php"><button type="button" class="btn" id="back" >Back</button></a></td>
              <td><input type="submit" class="btn" id="Save" name="save" value="Save"/></td>
            </tr>
        </table> 
    </div><br>
</form>
    </div>
  </div> 
<div><?php include'footer.php'; ?></div>


<script type="text/javascript">
  // GETTING ALL INPUT TEXT FIELDS
  var password = document.forms["vForm"]["newpass"];
  var password_confirmation = document.forms["vForm"]["c_newpass"];
  
  // GETTING ALL ERROR OBJECTS
  var password_error = document.getElementById("password_error");

  function Validate(){
    // VALIDATE PASSWORD
    if (password.value != password_confirmation.value) {
      password_error.textContent = "*Password mis-matched!";
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