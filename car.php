<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>VEHICLE BOOKING SYSTEM</title>
    <link rel="stylesheet" href="car.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&family=Roboto+Slab:wght@600&display=swap"
        rel="stylesheet">

<style>

* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */

.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */

.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */

.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */

.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */

.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */

@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>

<body>
       <header class="header">
       <marquee behavior="alternate" bgcolor="orange">
        <h1>VEHICLE BOOKING SYSTEM&nbsp;&nbsp;</h1>
       </marquee>
     
 
        <nav>
            <div class="logo">
                <h4 class="">CAR BOOK</h4>
            </div>
            <div class="menu">
                <a href="car.php">HOME</a>
                <a href="carlist.php">CAR LISTING</a>
                <a href="booking.php">BOOK A RIDE </a>
                <a href="about.php">ABOUT</a>
                <a href="contact_us.php">CONTACT US</a>
                <a href="index.php">LOGIN/SIGNUP</a>
                <a href="logout.php">Logout</a>
                <a href="admin.php">Admin</a>
            </div>
        </nav>
        
    </header>
    <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"> </div>
  <img src="background1.jpg" style="width:100%">
  <div class="text">Swift VDI</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="b.jpg" style="width:100%">
  <div class="text">Audi A3</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="a.jpg" style="width:100%">
  <div class="text">BMW 5 Series</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() 
{
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) 
  {
    slides[i].style.display = "none";  
  }

  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) 
  {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

<!--     <section>
        <div class="container">
            <h1>MAKE YOUR RIDE</h1>
            <p>(book your vehicle)</p>
            <hr>

            <label for="STP"><b>Starting Point</b></label>
            <input type="text" placeholder="ENTER PICKUP ADDRESS" name="STP" required>
            <br>

            <label for="DTP"><b>Destination point</b></label>
            <input type="text" placeholder="ENTER DROPPING ADDRESS" name="DTP" required>
            <br>

            <label for="DATE"><b>WHEN</b></label> <br>
            <input type="date" placeholder="DATE" name="DATE" required>
            <br>

            <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
            </label>

            <p>By this procedure we confirm your cab<a href="#" style="color:rgb(37, 104, 170)">Terms & Privacy</a>.</p>

            <div class="clearfix">
                <a href="admin_car.php">
                <button type="SEARCH" class="srchbtn">SEARCH</button>
            </a>
            </div>
        </div>
        </form>
    </section> -->
</body>

</html>
