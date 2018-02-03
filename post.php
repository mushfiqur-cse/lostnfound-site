<?php
session_start();
include "connector.php";
  
  $timezone= new DateTimeZone('Asia/Dhaka');
  $date_Time= new DateTime('now');
  $date_Time->setTimezone($timezone);
  $time= $date_Time-> format('H:i');
  $date=$date_Time->format('Y-m-d');
 

  if(!empty($_SESSION['username'])){
  $username=$_SESSION['username'];

   $sql= "select * from user where username='$username'";
   $result = mysqli_query($con,$sql);
   $row = mysqli_fetch_array($result);
  
   $contact= $row['contact'];
   $email= $row['email'];
} 
  else{
   header('location: index.php');
}

?>
<link rel="stylesheet" type="text/css" href="profile.css">

<div><?php include 'header.php'; ?></div>

  <div id="bodycontent"><center>
  <form action="post_process.php" method="POST" onsubmit="return Validate()" name="vForm">
    <table border="0" cellpadding="10%" cellspacing="10%">
      <tr><br><br><br>
        <td>Title</td>
        <td>
          <input type="text" name="title" placeholder="Title" pattern="[a-zA-Z_- ]{3,30}" required="">
        </td>
        
        <td>Type</td>
        <td>
          <input type="radio" name="ptype" required="" value="Lost">Lost
          <input type="radio" name="ptype" required="" value="Found">Found
        </td>        
        
        <td>Details</td>
        <td>
          <input type="text" name="details" placeholder="Details" pattern="[a-zA-Z0-9_- ]{2,120}" required="">
        </td>
      </tr>

        <tr>
          <td>User ID</td>
          <td><?php echo $username; ?></td>
        
          <td>Email</td>
          <td> 
             <input type="email" name="email" required="" value="<?php echo $email; ?>" >
          </td>
        
          <td>Contact</td>
          <td> <input type="text" name="contact" value="0<?php echo $contact; ?>"></td>
        </tr>

      <tr>
        <td>Date</td>
        <td><?php  echo $date.' - '.$time; ?></td>
        <td></td>
        <td></td>
        <td colspan="2">
          <input type="submit" class="btn" id="post" name="spost" value="Submit"  style="float: right;"/> 
          </a>
        </td>
      </tr>      
    </table>
  </form>
</center></div> 

<div><?php include'footer.php'; ?></div>
