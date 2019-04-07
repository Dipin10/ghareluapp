<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="slide.css">
  </head>
  <body>

    <?php
        include("header1.php");
      ?>
      <div class="clearfix"></div>


  <div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 6</div>
    <img src="images/plumber2.jpg" style="width:50% ; height:40%;">

  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 6</div>
    <img src="images/paint12.jpg" style="width:50%; height:40%;">
    </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 6</div>
    <img src="images/mechanic1.jpg" style="width:50%; height:40%;">
    </div>

  <div class="mySlides fade">
    <div class="numbertext">4 / 6</div>
    <img src="images/carpenter.jpg" style="width:50%; height:40%;">
    </div>

  <div class="mySlides fade">
    <div class="numbertext">5 / 6</div>
    <img src="images/internet1.jpeg" style="width:50%; height:40%;">
    </div>

  <div class="mySlides fade">
    <div class="numbertext">6 / 6</div>
    <img src="images/laptop2.png" style="width:50%; height:40%;">
    </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
  <span class="dot" onclick="currentSlide(6)"></span>
</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>
<h1 style="text-align:center; color :#A52A2A; " >OUR SERVICES</h1>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="servicesofuser.php">
      <img src="images/electric1.jpg" alt="" width="60%" height="22%">
    </a>
    <div class="desc">ELECTRIC REPAIR </div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="servicesofuser.php">
      <img src="images/plumber.jpg" alt="" width="40%" height="18%">
    </a>
    <div class="desc">PLUMBING REPAIR</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="servicesofuser.php">
      <img src="images/internet2.jpg" alt="Northern Lights" width="40%" height="18%">
    </a>
    <div class="desc">INTERNET REPAIR</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="servicesofuser.php">
      <img src="images/carpenter2.jpg" alt="" width="40%" height="18%">
    </a>
    <div class="desc">CARPENTER SERVICE</div>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="servicesofuser.php">
      <img src="images/paint2.jpg" alt="" width="40%" height="18%">
    </a>
    <div class="desc">PAINTING SERVICE</div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="servicesofuser.php">
      <img src="images/clean.jpg" alt="" width="40%" height="18%">
    </a>
    <div class="desc">CLEANING SERVICE</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="servicesofuser.php">
      <img src="images/cooking1.jpg" alt="" width="40%" height="18%">
    </a>
    <div class="desc">COOKING SERVICE</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="servicesofuser.php">
      <img src="images/repair3.jpg" alt="" width="40%" height="18%">
    </a>
    <div class="desc">DESKTOP & LAPTOP REPAIR</div>
  </div>
</div>
<div class="clearfix"></div>
<div class="abovefooter" style="float:left; display:inline-block; max-width:100%;padding:50px" >
        <span style="float:left;width: 50%;">
            <img src="images/allimg.png"
             width="100%" height:auto style="max-width:100%" />
        </span>
        <span style="float:right;width: 50%; max-width:100%">
          <h1 style="text-align:center">YOU'RE IN GOOD HANDS</h1>
          <h3 style="text-align:center">REASON TO CHOOSE GHARELU</h3>
          <ul class="above">
                              <li><i class="fa fa-check"></i> One stop maintenance solution</li>
                              <li><i class="fa fa-check"></i> Hassle free services: convenience</li>
                              <li><i class="fa fa-check"></i> Responsiveness</li>
                              <li><i class="fa fa-check"></i> Quality of work</li>
                              <li><i class="fa fa-check"></i> Experienced technicians</li>
                              <li><i class="fa fa-check"></i> Competitive price</li>
                              <li><i class="fa fa-check"></i> Security</li>
                          </ul>
        </span>
 </div>
 <div class="clearfix"></div>
 <?php include("footer.php") ?>

  </body>
</html>
