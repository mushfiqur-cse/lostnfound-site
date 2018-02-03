<?php
session_start();
include "connector.php";
  
  if(!empty($_SESSION['username'])){
  $username=$_SESSION['username'];

   $sql= "select * from user where username='$username'";
   $result = mysqli_query($con,$sql);
   $row = mysqli_fetch_array($result);
  
   $name= $row['firstname'];
   $email= $row['email'];
   $contact= $row['contact'];
   $info= $row['info'];
   $img= $row['img'];
    
    if(isset($_POST['submit'])){
      move_uploaded_file($_FILES['file']['tmp_name'],"user_img/".$_FILES['file']['name']);
      $upload_img = "UPDATE user SET img = '".$_FILES['file']['name']."' WHERE username='$username'";
      if(mysqli_query($con,$upload_img)){
        header('location: profile.php');
      }
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
<title>Profile</title>
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
      <form action="" method="post" enctype="multipart/form-data" style="margin-left: 20%; width: 50%">
          <input type="file" name="file"><br><br>
          <input type="submit" class="btn" name="submit" value="Upload">
      </form>
    </div>


  	<div id="details">
    <div id="table">
    	<table border="0" cellpadding="10%" cellspacing="10%" >
        	<tr>
            	<td width="50%">Name</td>
                <td> <?php echo $name; ?>  </td>
            </tr>
            <tr>
                <td>User ID</td>
                <td><?php echo $username; ?></td>
            </tr>
            <tr>
                <td>E-mail</td>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <td>Contact no</td>
                <td>+880<?php echo $contact; ?></td>
            </tr>
            <tr>
                <td>Personal Info</td>
                <td><?php echo $info; ?></td>
            </tr>
            <tr>
              <td><a href="chng_pass.php"><button type="button" class="btn" id="chng_pass" name="change_pass">Change Password</button></a></td>

              <td><a href="uprofile.php"><button type="button" class="btn" id="update" name="update">Update Info</button></a></td>
            </tr>
        </table>
    </div><br>
    </div>
  </div> 

<div><?php include'footer.php'; ?></div>

</body>
</html>
<script type="text/javascript">
	function welcome(x){
		alert("Welcome  " +x );	
	}
	welcome("<?php echo $_SESSION['username'];?>!");
</script>