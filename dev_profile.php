<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="LostnFound">
<meta name="keywords" content="HTML,CSS,JavaScript">
<meta name="author" content="maverick">
<title>Developer's Profile</title>
<style type="text/css">
body{
  margin: 0 auto;
  background: white;
  width: 100%;
  height: 100%;
}
#bodycontent{
  width: 100%;
  height: 500px;
  background-color:#366;
  text-align: center;
}
#bodycontent #leftbody{
  width: 45%;
  height: 100%;
  float: left;
}
#leftbody #img{
  width: 50%;
  height: 80%;
  margin-top: 5%;
}
#bodycontent #rightbody{
  width: 55%;
  height: 100%;
  float: right;
}
#rightbody .pic{
  height: 100%;
  width: 100%;
}
#pic_1{
  margin-top: 2%;
  width: 20%;
  height: 30%;
  border-radius: 50%;
  text-decoration: none;
  color: white;
  box-shadow: 0px 0px 5px #fff;
}
#pic_2{
  width: 20%;
  height: 30%;
  border-radius: 50%;
  margin-right: 25%;
  text-decoration: none;
  color: white;
  box-shadow: 0px 0px 5px #fff;
}
#pic_3{
  width: 20%;
  height: 30%;
  border-radius: 50%;
  text-decoration: none;
  color: white;
  box-shadow: 0px 0px 5px #fff;
}
#pic_4{
  width: 20%;
  height: 30%;
  border-radius: 50%;
  text-decoration: none;
  color: white;
  box-shadow: 0px 0px 5px #fff;
}

</style>
</head>
<body>
<div><?php include 'header.php'; ?></div>
  
  <div id="bodycontent">
    <div id="leftbody">
      <img src="site_img/23.png" id="img">
    </div>
    <div id="rightbody">
      <div class="pic">  
          <a href="https://www.facebook.com/gm.rabby" target="_blank">
              <img src="site_img/26.png" alt="..RABBI.." id="pic_1"></a><br>

          <a href="https://www.facebook.com/hemon.hasan" target="_blank">
              <img src="site_img/27.png" alt="..HEMON.." id="pic_2"></a>

          <a href="https://www.facebook.com/ony.safiul" target="_blank">
              <img src="site_img/25.png" alt="..ONY.." id="pic_3"></a><br>

          <a href="https://www.facebook.com/mushfiqur.cse" target="_blank">
              <img src="site_img/24.png" alt="..maverick.." id="pic_4"></a>
      </div>  
    </div>
    </div>
    
<div><?php include'footer.php'; ?></div>
</body>
</html>
