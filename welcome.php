<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
if (!isset($_SESSION['email'])) {
  header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}
.icon{
margin:10px 80px 10px 20px;
padding:10px;

}

.navbar {
  overflow: hidden;
  background-color: #333;
  margin:10px;
  padding:10px;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
.footers{
margin:10px 20px 10px 10px;
border:2px dashed black;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.mainbody{
margin:10px;
display:flex;
flex-direction:right;
flex-width:40px;
border:2px solid black;
border-radius:10px;
}
.imgs{
align:left;
float:left;

width:100%;

}
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
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
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
<link rel="stylesheet" href="Stylesheet.css">
</head>
<body>
<marquee bgcolor="red" direction="right">*****New Vaccancies Availiable*****</marquee>
<div class="navbar">
  <img src="hostle.png" align="left" width="50" height="50">
  <a href="#home">Home</a>
  
  <a name="top" href="#bottom">Contact</a>
  <div class="dropdown">
    <button class="dropbtn">Account
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="details.php?emal=<?php echo $_SESSION['email']; ?>">View Account</a>
      <a href="profile1.php">Register</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="dropbtn">HostelsType
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="Boyshostel.html">Boys Hostel</a>
      <a href="Girlshostel.html">Girls Hostel</a>
    </div>
  </div>
  
  <a style="float: right;"><?php echo $_SESSION['username']; ?></a>

  <a href="logout.php" style="float:right;">SignOut</a>
</div>
<div class="mainbody">
<div class="imgs">
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="https://vistapointe.net/images/hostel-3.jpg" width="800" height="400">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/42/ACC_room3.jpg/800px-ACC_room3.jpg" width="800" height="400">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="https://vistapointe.net/images/hostel-8.jpg" width="800" height="400">
  <div class="text"></div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
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
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</div>
<div class="content">
<h1>ONLINE HOSTEL MANAGEMENT</h1>
<img src="quotation.jpg" height="200" width="320" ></img>
</div>
</div>
<br>
<br>
<div class="footers">
<footer class="footer-distributed">

<div class="footer-left">

<h3>Hostels<span>info</span></h3>
  <p>Here We provide the Information of the Hostels</p>
<p class="footer-links">
<a href="#" class="link-1">Home</a>

<a href="#">About</a>

<a name="bottom" href="#top">Contact</a>
</p>

<p class="footer-company-name">Hostels Name © 2021</p>
</div>

<div class="footer-center">

<div>
<i class="fa fa-map-marker"></i>
<p><span>Private Hostels</span>A.Rangampeta,Tirupati,Andhrapradesh,517104 </p>
</div>

<div>
<i class="fa fa-phone"></i>
<p>+91 9515975743</p>
</div>

<div>
<i class="fa fa-envelope"></i>
<p><a href="mailto:velikantirupendra369@gmail.com">info@gmail.com</a></p>
</div>

</div>

<div class="footer-right">

<p class="footer-company-about">
<span>About</span>

</p>

<div class="footer-icons">

<a href="#"><i class="fa fa-facebook"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-linkedin"></i></a>
<a href="#"><i class="fa fa-github"></i></a>

</div>

</div>

</footer> 
</div>
</body>
</html>