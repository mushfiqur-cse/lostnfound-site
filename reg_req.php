<?php
session_start();
include "connector.php";

  if(!empty($_SESSION['adminID'])){
    $adminID=$_SESSION['adminID'];
    
    $sql_reg_req = "select * from reg_req";

    $res_reg_req = mysqli_query($con, $sql_reg_req);
  } 
  else{
     header('location: index.php');
  }
?>
<link rel="stylesheet" type="text/css" href="atable.css">
<div><?php include 'header.php'; ?></div>

  <div id="bodycontent">
<center>
  <div id="reg_req">
  <table id="atable">
   <h3>Registration Request</h3>
      <tr>
        <th>First Name</th>
        <th>User ID</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Decision</th>
      </tr>
      <tr>
        <?php
          if(mysqli_num_rows($res_reg_req)>0){
          while($row=mysqli_fetch_array($res_reg_req))
          {
          ?>
          <tr>
            <td>
              <?php echo $row["req_firstname"]; ?>
            </td>
            <td>
              <?php echo $row["req_username"]; ?>
            </td>
            <td>
              <?php echo $row["req_email"]; ?>
            </td>
            <td>
              <?php echo "+880".$row["req_contact"]; ?>
            </td>
            <td>
              <a href="req_delete.php?req_id=<?php echo $row['req_id']?>">Delete</a>&nbsp&nbsp&nbsp&nbsp&nbsp
              <a href="req_approve.php?req_id=<?php echo $row['req_id']?>">Approve</a>
              
            </td>
          </tr>
          <?php
          }
          }
        ?>
      </tr>
    </table>
    </div></center>
  </div>

<div><?php include 'footer.php'; ?></div>
