<?php
session_start();
  include "connector.php";

  if(!empty($_SESSION['username'])){
    $username=$_SESSION['username'];
      
    $sql= "select * from user where username='$username'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);

     $pass=$row['pass'];
     $cpass=$row['cpass'];
      
      $newpass = $_POST['newpass'];
      $c_newpass = $_POST['c_newpass'];

      $update_sql= "UPDATE user set pass='$newpass', cpass='$c_newpass' where username='$username'";
      if(mysqli_query($con,$update_sql)){
        echo '<h1 style="color:green; text-align:center">Password Changed!<br>Click <a href="profile.php">Here</a> to Return Profile</h1>';
      }
    }
else
  header('location: index.php');    
?>