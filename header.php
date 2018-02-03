<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="LostnFound,lnf,l&f,LnF,LandF,lostnfound.com,lostnfound.cf,www.lostnfound.com,www.lostnfound.cf,lost and found,lostnfound,lost & found,lost cat,lost pendrive,found,lost,lost n found">


<meta name="description" content="LostnFound is a Social Service web based application. Everyday we lost our importent stuffs and somebody also found, so this platform will help the users to find their essential lost items, besides person who found the lost item- can easy communicate with the owner of that good.">

<meta name="author" content="maverick">
<link rel="icon" type="image/png" href="site_img/8.png">
<title>LostnFound</title>
<link rel="stylesheet" type="text/css" href="header.css">
<style type="text/css">
</style>
</head>
<body>
<div id="wrapper">
    <div id="header">
    <a href="index.php" target="_blank"><img src="site_img/1.png" id="leftlogo"></a>
    <img src="site_img/9.jpg" id="rightlogo">
    </div>
  
  <div id="titlebar">
    <div id="titleleft">
      <a href="home.php">Home</a>
      <a href="lost.php">Lost</a>
      <a href="found.php">Found</a>
      <a href="gallery.php">Gallery</a>  
  </div>

<?php  
  if(!empty($_SESSION['username'])) { ?>
    <div id="titleright">
      <a href="logout.php">Log Out</a>
      <a href="post.php">Post</a>




      <a href="myAds.php">My Ads</a>
      <a href="profile.php"><?php echo $_SESSION['username'] ?></a>
    </div>

  <?php } elseif (!empty($_SESSION['adminID'])) { ?>
    <div id="titleright">
      <a href="logout.php">Log Out</a>
      <a href="reg_req.php">Reg Request</a>
      <a href="userdb.php">User DB</a>
      <a href="adsdb.php">Ads DB</a>
      <a href="mailbox.php">Mail</a>
      <a href="admin_profile.php"><?php echo $_SESSION['adminID'] ?></a>
    </div>

  <?php } else { ?>
    <div id="titleright">
      <a href="form.php">Register</a>
      <a href="login.php">Login</a> 
    </div>
<?php } ?>


