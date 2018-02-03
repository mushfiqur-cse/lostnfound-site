<?php
session_start();
include "connector.php";
 
  if(!empty($_SESSION['adminID'])){
    $adminID= $_SESSION['adminID'];

    $sql_user = "select * from user";
    $res_user = mysqli_query($con, $sql_user);
  } 
  else{
   header('location: index.php');
  }
?>
<link rel="stylesheet" type="text/css" href="atable.css">


<div><?php include 'header.php'; ?></div>

  <div id="bodycontent"><center>
    <h3><b>User Database</b></h3>
    	<table id="atable">
      <tr>
        <th>First Name</th>
        <th>User ID</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Modify</th>
      </tr>

      <tr>
        <?php
          if(mysqli_num_rows($res_user)>0){
          while($row=mysqli_fetch_array($res_user))
          {
          ?>
          <tr>
            <td>
              <?php echo $row["firstname"]; ?>
            </td>
            <td>
              <?php echo $row["username"]; ?>
            </td>
            <td>
              <?php echo $row["email"]; ?>
            </td>
            <td>
              <?php echo '0'.$row["contact"]; ?>
            </td>
            <td>
              <a href="admin_drop_user.php?id=<?php echo $row['id']?>">Delete</a>
            </td>
          </tr>
          <?php
          }
          }
        ?>
      </tr>
    </table></center>
  </div>

<div><?php include'footer.php'; ?></div>

