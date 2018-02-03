<?php
session_start();
include "connector.php";
  
  if(!empty($_SESSION['username'])){
    $username=$_SESSION['username'];

     $sql= "select * from user where username='$username'";
     $result = mysqli_query($con,$sql);
     $row = mysqli_fetch_array($result);
     $name=$row['firstname'];
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

   if(!empty($_POST['name']) || !empty($_POST['email'])){
      $update_name=$_POST['name'];
      $update_email=$_POST['email'];
      $update_contact=$_POST['contact'];
      $update_info=$_POST['info'];

      $update_sql= "UPDATE user set firstname='$update_name', email='$update_email', contact='$update_contact', info='$update_info' where username='$username'";
      if(mysqli_query($con,$update_sql)){
        header('location: profile.php');
      }
   }

} else{
   header('location: index.php');
}
?>

<link rel="stylesheet" type="text/css" href="profile.css">
<div><?php include 'header.php'; ?></div>

  <div id="bodycontent">
  	<div id="photo">
      <?php
        include "connector.php";
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
  <form action="" method="post" name="update">
    <div id="table">
    	<table border="0" cellpadding="10%" cellspacing="10%" >
        	<tr>
            	<td>Name</td>
                <td> <input type="text" name="name" value="<?php echo $name; ?>"> </td>
            </tr>
            <tr>
                <td>User ID</td>
                <td>
                <?php
                    echo $username;
                  ?>
                </td>
            </tr>
            <tr>
                <td>E-mail</td>
               <td> <input type="email" name="email" value="<?php echo $email; ?>" > </td>
                
            </tr>
            <tr>
                <td>Contact no</td>
                <td> <input type="text" name="contact" value="<?php echo $contact; ?>" > </td>
            </tr>
            <tr>
                <td>Personal Info</td>
                <td> <input type="text" name="info" value="<?php echo $info; ?>" > </td>
            </tr>
            <tr>
              <td><a href="profile.php"><button type="button" class="btn" id="back">Back</button></a></td>
              <td><button type="submit" class="btn" id="update">Save</button></td>
            </tr>
        </table>
    </div><br>
</form>
    </div>
  </div> 
  
<div><?php include'footer.php'; ?></div>
