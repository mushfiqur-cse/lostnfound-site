<?php
session_start();
include "connector.php";
  
  if(!empty($_SESSION['adminID'])){
    $adminID= $_SESSION['adminID'];

     $sql= "select * from admin where adminID='$adminID'";
     $result = mysqli_query($con,$sql);
     $row = mysqli_fetch_array($result);
  
      $adminname= $row['adminname'];
  } 
  else{
    header('location: index.php');
  }
?>
<link rel="stylesheet" type="text/css" href="profile.css">

<div><?php include 'header.php'; ?></div>
  <div id="bodycontent">
  	<div id="photo">
    	<img src="site_img/11.png" id="img">
    </div>
  	<div id="details">
    <div id="table">
    	<table border="0" cellpadding="10%" cellspacing="10%" >
        	<tr>
            	<td width="50%">Admin Name</td>
                <td> <?php echo $adminname; ?>  </td>
            </tr>
            <tr>
                <td>Admin ID</td>
                <td><?php echo $adminID; ?></td>
            </tr>
            <tr>
              <td colspan="2"><a href="admin_chng_pass.php"><button type="button" class="btn" id="chng_pass" name="change_pass">Change Password</button></a></td>
            </tr>
        </table>
    </div><br>
    </div>
    </div> 

<div><?php include 'footer.php'; ?></div>

