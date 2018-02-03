<?php
session_start();
  include "connector.php";

  $sql = "SELECT * FROM mailbox";
  $result = mysqli_query($con, $sql);
?>
<link rel="stylesheet" type="text/css" href="atable.css">

<div><?php include 'header.php'; ?></div>

<div id="bodycontent"><center>
  <h3><b>Mail-Box</b></h3>
  <table id="atable">
    <tr>
      <th>ID</th>
      <th>Sender Name</th>
      <th>Email</th>
      <th>Subject</th>
      <th>Details</th>
    </tr>
    <tr>
      <?php
        if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_array($result))
        {
        ?>
        <tr>
          <td>
            <?php echo $row['id']; ?>
          </td>
          <td>
            <?php echo $row["name"]; ?>
          </td>
          <td>
            <?php echo $row["email"]; ?>
          </td>
          <td>
            <?php echo $row["subject"]; ?>
          </td>
          <td>
            <a href="view_mail.php?id=<?php echo $row['id']?>&type=l">View</a>
          </td>
        </tr>
        <?php
        }
        }
      ?>
    </tr>
  </table>
</center></div>
<div><?php include 'footer.php' ?></div>

