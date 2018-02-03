<?php
session_start();
include "connector.php";

  $id= $_GET['id'];
  $type= $_GET['type'];

?>
<link rel="stylesheet" type="text/css" href="profile.css">

<div><?php include 'header.php'; ?></div>

  <div id="bodycontent"><center>
      <div id="photo">
      <img src="site_img/20.png" id="img">
    </div>
    
    <div id="details">
    <div id="table">
      <table border="0" cellpadding="10%" cellspacing="10%" >
      <tr>
        <tr>
        <td width="100px">Name</td>
        <td colspan="3">
            <?php
              $sql = "SELECT * FROM found WHERE id='$id'";
              $result = mysqli_query($con, $sql);
              $row= mysqli_fetch_array($result);
              echo $row['username'];
            ?>
        </td>
      </tr>
      <tr>
        <td>Email</td>
        <td colspan="3">
            <?php
              $sql = "SELECT * FROM found WHERE id='$id'";
              $result = mysqli_query($con, $sql);
              $row= mysqli_fetch_array($result);
              echo $row['email'];
            ?>
        </td>
      </tr>
      <tr>
        <td>Contact no</td>
        <td colspan="3">
            <?php
              $sql = "SELECT * FROM found WHERE id='$id'";
              $result = mysqli_query($con, $sql);
              $row= mysqli_fetch_array($result);
              echo '0'.$row['contact'];
            ?>
        </td>
      </tr>
      <tr>
        <td>Title</td>
        <td>
            <?php
              $sql = "SELECT * FROM found WHERE id='$id'";
              $result = mysqli_query($con, $sql);
              $row= mysqli_fetch_array($result);
              echo $row['title'];
            ?>
        </td>
        <td>Type</td>
        <td>
            <?php
              $sql = "SELECT * FROM found WHERE id='$id'";
              $result = mysqli_query($con, $sql);
              $row= mysqli_fetch_array($result);
              echo $row['type'];
            ?>
        </td>

        
      </tr>
      <tr>
        <td>Details</td>
        <td colspan="3" width="400px">
            <?php
              $sql = "SELECT * FROM found WHERE id='$id'";
              $result = mysqli_query($con, $sql);
              $row= mysqli_fetch_array($result);
              echo $row['details'];
            ?>
        </td>
      </tr>
      </table>
    </div>
      
    </div>
  
  </center></div> 

<div><?php include'footer.php'; ?></div>

