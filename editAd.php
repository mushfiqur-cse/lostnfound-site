<?php
session_start();
include "connector.php";

    if(!empty($_SESSION['username'])){
    $username=$_SESSION['username'];
  
  $id = $_GET['id'];
  $type= $_GET['type'];

     $sql_user= "select * from user where username='$username'";
     $result_user = mysqli_query($con,$sql_user);
     $row_user = mysqli_fetch_array($result_user);
      
      $contact= $row_user['contact'];
      $email= $row_user['email'];

     if($type=='l'){
     $sql_lost= "select * from lost where id='$id'";
     $result_lost = mysqli_query($con,$sql_lost);
     $row_lost = mysqli_fetch_array($result_lost);
     
      $title= $row_lost['title'];
      $ptype= $row_lost['type'];
      $details= $row_lost['details'];
    }
    elseif($type=='f'){
     $sql_found= "select * from found where id='$id'";
     $result_found = mysqli_query($con,$sql_found);
     $row_found = mysqli_fetch_array($result_found);
     
      $title= $row_found['title'];
      $ptype= $row_found['type'];
      $details= $row_found['details'];
    }
    else{
      header('location: myAds.php');
    }

} 
  else{
    header('location: index.php');
  }

?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="LostnFound">
<meta name="keywords" content="HTML,CSS,JavaScript">
<meta name="author" content="maverick">
<title>Edit Ad</title>
<link rel="stylesheet" type="text/css" href="profile.css">
<style type="text/css">
body{
  margin: 0 auto;
  background: white;
  width: 100%;
  height: 100%;
}

</style>
</head>
<body>

<div><?php include 'header.php' ?></div>

  <div id="bodycontent"><center>
  <form action="editAd_process.php" method="POST" onsubmit="return Validate()" name="vForm">
    <table border="0" cellpadding="10%" cellspacing="10%">
      <tr><br><br>
        <td>Title</td>
        <td><input type="text" name="title" value="<?php echo $title; ?>">
            <div id="title_error" class="val_error"></div>
        </td>
        
        <td>Type</td>
        <td>
          <input type="radio" name="ptype" required="" value="<?php echo $ptype; ?>">Lost
          <input type="radio" name="ptype" required="" value="<?php echo $ptype; ?>">Found

          <div id="ptype_error" class="val_error"></div>
        </td>        
        <td>Details</td>
        <td><input type="text" name="details" value="<?php echo $details; ?>">
            <div id="details_error" class="val_error"></div>
        </td>
      </tr>

      <tr>
        <td>User ID</td>
        <td><?php echo $username; ?></td>
        
        <td>Email</td>
        <td><?php echo $email; ?></td>
        
        <td>Contact</td>
        <td>+880<?php echo $contact; ?></td>
      </tr>

      <tr>
        <td colspan="4"></td>
        <td colspan="2">
          <input type="submit" class="btn" name="spost" value="Submit"/></a>
        </td>
      </tr>      
    </table>
  </form>
 </center></div> 
 
<div><?php include 'footer.php'; ?></div>

</body>
</html>

<script type="text/javascript">
  // GETTING ALL INPUT TEXT FIELDS
  var title = document.forms["vForm"]["title"];
  var ptype = document.forms["vForm"]["ptype"];
  var details = document.forms["vForm"]["details"];
  
  // GETTING ALL ERROR OBJECTS
  var title_error = document.getElementById("title_error");
  var ptype_error = document.getElementById("ptype_error");
  var details_error = document.getElementById("details_error");

    // SETTING ALL EVENT LISTENERS
  title.addEventListener("blur", titleVerify, true);
  ptype.addEventListener("blur", ptypeVerify, true);
  details.addEventListener("blur", detailsVerify, true);
  
  function Validate(){
    // VALIDATE
    if(title.value == ""){
      title_error.textContent = "*Title is required";
      title.style.border = "1px solid red";
      title.focus();
      return false;
    }
   
    if(ptype.value == ""){
      ptype_error.textContent = "*Type is required";
      ptype.style.border = "1px solid red";
      ptype.focus();
      return false;
    }
    // VALIDATE EMAIL
    if(details.value == ""){
      details_error.textContent = "*Details is required";
      details.style.border = "1px solid red";
      details.focus();
      return false;
    }
  }
  // ADD EVENT LISTENERS
  function titleVerify(){
    if (title.value != "") {
      title_error.innerHTML = "";
      title.style.border = "1px solid #110E0F";
      return true;
    }
  }
  function ptypeVerify(){
    if (ptype.value != "") {
      ptype_error.innerHTML = "";
      ptype.style.border = "1px solid #110E0F";
      return true;
    }
  }
  function detailsVerify(){
    if (details.value != "") {
      details_error.innerHTML = "";
      details.style.border = "1px solid #110E0F";
      return true;
    }
  }
</script>
