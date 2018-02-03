<?php 
session_start();
?>
<link rel="stylesheet" type="text/css" href="home.css">
<div><?php include 'header.php'; ?></div>

<div id="bodycontent">
    <div id="slideimg">
    
<div class="slideshow-container">
  
  <div class="mySlides fade">
    <img src="site_img/2.jpg" id="simg">
    <div class="text">Lost a wallet.?</div>
  </div>

  <div class="mySlides fade">
    <img src="site_img/3.png" id="simg">
    <div class="text">Lost your pet.?</div>
  </div>
  
  <div class="mySlides fade">
    <img src="site_img/5.jpg" id="simg">
    <div class="text">Lost your phone.?</div>
  </div>
  
  <div class="mySlides fade">
    <img src="site_img/6.jpg" id="simg">
    <div class="text">Find Here..</div>
  </div>
  
  <div class="mySlides fade">
    <img src="site_img/7.jpg" id="simg">
    <div class="text">Find Here...</div>
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>


<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
</div> 

<script type="text/javascript">
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }

  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>
   
  </div>
    <div id="content">
    <img src="site_img/1.png" id="cimg"> 
    </div>
</div>
  
<div><?php include'footer.php'; ?></div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2700); // Change image every 2.7 seconds
}
</script>