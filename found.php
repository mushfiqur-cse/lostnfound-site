<?php
session_start();
  include "connector.php";
  
  $sql = "SELECT * FROM user INNER JOIN found ON user.username = found.username";
  $result = mysqli_query($con, $sql);
?>
<link rel="stylesheet" type="text/css" href="lostnfound.css">

<div><?php include 'header.php'; ?></div>

<div id="bodycontent"><center>
  <h1><b>Found Items</b></h1>
  <table id="btable">
    <tr>
      <th>Date</th>
      <th>Type</th>
      <th>Title</th>
      <th>User Name</th>
      <th>Email</th>
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
            <?php echo $row["date"]; ?>
          </td>

          <td>
            <?php echo $row["type"]; ?>
          </td>
          <td>
            <?php echo $row["title"]; ?>
          </td>
          <td>
            <?php echo $row["firstname"]; ?>
          </td>
          <td>
            <?php echo $row["email"]; ?>
          </td>
          <td>
            <a href="view_found.php?id=<?php echo $row['id']?>&type=f">View</a>
          </td>
        </tr>
        <?php
        }
        }
      ?>
    </tr>
  </table>
 
<div class="pagination">
  <a href="#">&laquo;</a>
  <a class="active" href="#">1</a>
  <a href="#">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a href="#">&raquo;</a>
</div>

</center></div>
<div><?php include'footer.php'; ?></div>

