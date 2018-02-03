<?php 
	session_start();
?>

<link rel="stylesheet" type="text/css" href="contactUs.css">
<div><?php include 'header.php'; ?></div>

  <div id="bodycontent">
    <div id="leftbody">
    <h2 style="color: white; text-align: left; margin-left: 5%;">Locate us here </h2>
      <div id="map" style="height: 65%; width: 90%; margin: 0 auto;"></div>
        <script>
          function initMap() {
            var dhaka = {lat: 23.7568499, lng: 90.44174775};
            var map = new google.maps.Map(document.getElementById('map'), {
              zoom: 15,
              center: dhaka
            });
            var marker = new google.maps.Marker({
              position: dhaka,
              map: map
            });
          }
        </script>
    <script src="https://maps.googleapis.com/maps/api/js?key= AIzaSyBciEsdveb36HaYj6s3F2PWMzg0OEUqWBg&callback=initMap">
  	</script>
    <div>
      <p style="color: white;text-align: left; margin-left: 7%;">Block: L, Road:13, House: 36<br>
        South Banasree, Dhaka</p>
    </div>
    </div>

    <div id="rightbody">
      <h2 style="color: white; text-align: left; margin-left: 20%;">Mail to </h2>
      <form action="mail_handler.php" method="POST">
        <input type="text" name="name" placeholder="Your Name" required=""><br>
        <input type="email" name="email" placeholder="username@example.com" required=""><br>
        <input type="text" name="subject" placeholder="Subject" required=""><br>
        <textarea name="msg" placeholder="Your message..." id="msg" required=""></textarea>

        <input type="submit" name="btn" value="Send">
      </form>
    </div>
    </div>

<div><?php include 'footer.php'; ?></div>

