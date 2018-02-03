<?php
session_start();
include "connector.php";

  if(!empty($_SESSION['adminID'])){
    $adminID=$_SESSION['adminID'];
    
    $sql_found = "select * from found";
    $sql_lost = "select * from lost";

    $res_found = mysqli_query($con, $sql_found);
    $res_lost = mysqli_query($con, $sql_lost);
  } 
  else{
     header('location: index.php');
  }
?>
<link rel="stylesheet" type="text/css" href="profile.css">

<style type="text/css">
#bodycontent #found_table{
  float: right;
  width: 45%;
  background-color:white;
  text-align: center;
}
#bodycontent #lost_table{
  float: left;
  width: 45%;
  background-color:white;
  text-align: center;
}
#lost_table #ltable{
  border-collapse: collapse;
  width: 100%; 
  text-align: center;
  font-size: 18px;
  padding-top: 5px;
  padding-left: 20px;
  line-height: 30px;
}
#found_table #ftable{
  border-collapse: collapse;
  width: 100%; 
  text-align: center;
  font-size: 18px;
  padding-top: 5px;
  padding-left: 20px;
  line-height: 30px;
}

 #found_table #ftable tr:nth-child(even){background-color: #f2f2f2}

 #found_table #ftable th {
    background-color: #366;
    color: white;
}

 #lost_table #ltable tr:nth-child(even){background-color: #f2f2f2}

 #lost_table #ltable th {
    background-color: #366;
    color: white;
}
</style>
</head>
<body>

<div><?php include 'header.php'; ?></div>

  <div id="bodycontent">
    <div id="found_table"><center>
    <h3>Found Database</h3>
    	<table id="ftable">
      <tr><th>Type</th>
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
              <?php echo $row["type"]; ?>
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
              <a href="admin_dropAd.php?id=<?php echo $row['id']?>&type=f">Delete</a>
            </td>
          </tr>
          <?php
          }
          }
        ?>
      </tr>
    </table></center>
  </div>

  <div id="lost_table"><center>
  <table id="ltable">
   <h3>Lost Database</h3>
      <tr><th>Type</th>
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
              <?php echo $row["type"]; ?>
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
              <a href="admin_dropAd.php?id=<?php echo $row['id']?>&type=l">Delete</a>
            </td>
          </tr>
          <?php
          }
          }
        ?>
      </tr>
    </table></center>
    </div>
  </div>

<div><?php include 'footer.php'; ?></div>
