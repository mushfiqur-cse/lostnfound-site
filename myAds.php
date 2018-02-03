<?php
  session_start();
  include "connector.php";

  if(!empty($_SESSION['username'])){
    $username=$_SESSION['username'];

    $sql_found = "select * from found where username='$username'";
    $sql_lost = "select * from lost where username='$username'";

  $res_found = mysqli_query($con, $sql_found);
  $res_lost = mysqli_query($con, $sql_lost);
  }
  else{
   header('location: index.php');
  }

?>
<link rel="stylesheet" type="text/css" href="profile.css">

<div><?php include 'header.php'; ?></div>

  <div id="bodycontent">
  	<div id="photo">
    	<img src="site_img/28.png" id="img">
    </div>
    
    <div id="myAds"><center>
    <h3>Found Ads</h3>
    <table id="btable">
      <tr>
        <th>Date</th>
        <th>Title</th>
        <th>Details</th>
        <th>User Id</th>
        <th>Modify</th>
      </tr>

      <tr>
        <?php
          if(mysqli_num_rows($res_found)>0){
          while($row=mysqli_fetch_array($res_found))
          {
          ?>
          <tr>
            <td>
              <?php echo $row["date"]; ?>
            </td>
            <td>
              <?php echo $row["title"]; ?>
            </td>
            <td>
              <?php echo $row["details"]; ?>
            </td>
            <td>
              <?php echo $row["username"]; ?>
            </td>
            <td>
          	  <a href="editAd.php?id=<?php echo $row['id']?>&type=f&title=<?php echo $row['title']?>&details=<?php echo $row['details']?>">Edit &nbsp &nbsp</a>
              <a href="dropAd.php?id=<?php echo $row['id']?>&type=f">Delete</a>
          </tr>
          <?php
          }
          }
        ?>
      </tr>

    </table>

   <table id="btable">
   <h3>Lost Ads</h3>
      <tr>
        <th>Date</th>
        <th>Title</th>
        <th>Details</th>
        <th>User Id</th>
        <th>Modify</th>
      </tr>
      <tr>
        <?php
          if(mysqli_num_rows($res_lost)>0){
          while($row=mysqli_fetch_array($res_lost))
          {
          ?>
          <tr>
            <td>
              <?php echo $row["date"]; ?>
            </td>
            <td>
              <?php echo $row["title"]; ?>
            </td>
            <td>
              <?php echo $row["details"]; ?>
            </td>
            <td>
              <?php echo $row["username"]; ?>
            </td>
            <td>
          	  <a href="editAd.php?id=<?php echo $row['id']?>&type=l&title=<?php echo $row['title']?>&details=<?php echo $row['details']?>">Edit &nbsp &nbsp</a>
             <a href="dropAd.php?id=<?php echo $row['id']?>&type=l">Delete</a>
            </td>
          </tr>
          <?php
          }
          }
        ?>
      </tr>
    </table></center>

    </center>
</div>
  </div>
  
<div><?php include'footer.php'; ?></div>

