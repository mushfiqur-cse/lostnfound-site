<?php
session_start();
include "connector.php";
   
  $id= $_GET['id'];

?>

<link rel="stylesheet" type="text/css" href="profile.css">

<div><?php include 'header.php'; ?></div>

  <div id="bodycontent"><center>
      <div id="photo">
      <img src="site_img/29.png" id="img">
    </div>
    
    <div id="details">
    <div id="table">
      <table border="0" cellpadding="10%" cellspacing="10%" >
      <tr>
        <tr>
        <td>Name</td>
        <td>
            <?php
              $sql = "SELECT * FROM mailbox WHERE id='$id'";
              $result = mysqli_query($con, $sql);
              $row= mysqli_fetch_array($result);
              echo $row['name'];
            ?>
        </td>
      </tr>
      <tr>
        <td>Email</td>
        <td>
            <?php
              $sql = "SELECT * FROM mailbox WHERE id='$id'";
              $result = mysqli_query($con, $sql);
              $row= mysqli_fetch_array($result);
              echo $row['email'];
            ?>
        </td>
      </tr>
      <tr>
        <td>Subject</td>
        <td>
            <?php
              $sql = "SELECT * FROM mailbox WHERE id='$id'";
              $result = mysqli_query($con, $sql);
              $row= mysqli_fetch_array($result);
              echo $row['subject'];
            ?>
        </td>
      </tr>
      <tr>
        <td>Message</td>
        <td>
            <?php
              $sql = "SELECT * FROM mailbox WHERE id='$id'";
              $result = mysqli_query($con, $sql);
              $row= mysqli_fetch_array($result);
              echo $row['msg'];
            ?>
        </td>
      </tr>
      </table>
    </div>
      
    </div>
  
  </center></div> 

<div><?php include'footer.php'; ?></div>
