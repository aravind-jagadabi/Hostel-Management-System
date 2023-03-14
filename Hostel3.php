<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Example</title>
<link rel="stylesheet" href="infostylesheet.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
body{
  background-image:url("https://i.redd.it/vdhgv54ndnj21.png");
  background-repeat:no-repeat;
  background-size:300%;
  height:200%;
}
.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
  top: 9px;
  left: 9px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: white;
}
img{
  height:700px;
  width:100%;
  
}
.tab{
  border:5px solid black;
  background-color:RGB(77, 65, 72);
}
</style>  
</head>
<body>
  <?php
  session_start();
    $_SESSION['to_email']="rupendrareddyvelikanti@gmail.com";
  ?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"></a>
    </div>
  </div>
</nav>
<div class="container">
    <div class="row mb-2">
        <div class="col-12 text-center pt-3">
            <h1 style="color:black;font-size:50px;font-family:Cooper"><b>Sivasai    Boys  Hostel<b></h1>
            <!--<p>Sree sainath nagar,A.Rangampeta,Tirupati</p>-->
        </div>
    </div>
</div>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="hostel31.jpeg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="hostel32.jpeg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="hostel33.jpeg" style="width:100%">
  <div class="text"></div>
</div>

<a class="prev" onclick="plusSlides(-1)" style="font-size:2px;">&#10094;</a>
<a class="next" onclick="plusSlides(1)" style="font-size:2px;">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
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
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>

<div class="container ">
  <h1 style="color:white;"><b><i>Details of the hostel</i></b> </h1>
  <div class="tab">
  <table class="table table-hover" border="2px solid red"  width="100%">
    <tr><td><h1><strong>Name of the Hostel: </strong>Sivasai Boys Hostel</h1></td></tr>
  <tr><td><h1><strong>OwnerName: B.Sreedhar</strong></h1></td></tr>
  <tr><td><h1><strong>Owner Contact: </strong>9291340745</h1></td></tr>
  <tr><td><h1><strong>Address:</strong>A.Rangampeta Tirupati 517102</h1></td></tr>
  
  <tr><td><h1><strong>Hostel Facilities:<br>1.wifi<br>2.Hot water<br>3.CC camera<br>4.Mineral Water<br></strong></td></tr>
  <tr><td><h1><strong><h1><b>Room Share Available</b></h1>
     <label class="container">Four
     <input type="radio" name="radio">
     <span class="checkmark"></span>
     </label>
     <label class="container">Five
     <input type="radio" name="radio">
     <span class="checkmark"></span>
     </label></strong></h1></td></tr>
   <tr><td><h1><strong>Total Vacancies Available: </strong>7</h1></td></tr>
   <tr><td><h1><strong>Fee:</strong><br>
  <<strong>Per Month:</strong>4800/-<br></h1></td></tr>
  </table>
  </div>
</div>
<!--<button class="button" align="center">Apply Now</button>-->
<form action="profile.php" method="post">
  <div class="container">
  <button type="submit" name="submit" class="btn btn-primary btn-lg"><h2>Apply Now</h2></button>
</div>
</body>
</html>