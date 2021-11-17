<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"> 

<style>
* {box-sizing: border-box;}
body {font-family: brandon_grotesque_black;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}
.navbar {
  overflow: hidden;
  background-color: #333;
}

/* Navigation links */
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* The subnavigation menu */
.subnav {
  float: left;
  overflow: hidden;
}

/* Subnav button */
.subnav .subnavbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

/* Add a red background color to navigation links on hover */
.navbar a:hover, .subnav:hover .subnavbtn {
  background-color: black;
}

/* Style the subnav content - positioned absolute */
.subnav-content {
  display: none;
  position: absolute;
  left: 0;
  background-color: red;
  width: 100%;
  z-index: 1;
  color: white;
}

/* Style the subnav links */
.subnav-content a {
  float: left;
  color: white;
  text-decoration: none;
}

/* Add a grey background color on hover */
.subnav-content a:hover {
  background-color: #eee;
  color: black;
}

/* When you move the mouse over the subnav container, open the subnav content */
.subnav:hover .subnav-content {
  display: block;
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
  background-color: #000000;
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


.header {
  background-color: #F1F1F1;
  text-align: center;
  padding: 4px;
  font-style: oblique;
  font-family: brandon_grotesque_black;
  font-size: 18px;

}
.topnav {
  overflow: hidden;
  background-color: #333;

}

/* Navbar links */
.topnav a{
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 10px 10px;
  text-decoration: none;
}

/* Links - change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
.top {
  overflow: hidden;
  background-color: #333;

}

/* Navbar links */
.top a{
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 10px 14px;
  text-decoration: none;
}

/* Links - change color on hover */
.top a:hover {
  color: red;
}
.column {
  float: left;
}

/* Left and right column */
.column.side {
  width: 30%;
  font-family: brandon_grotesque_black;
  font-size: 35px;
}
/* Middle column */
.column.middle {
  width: 70%;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column.side, .column.middle {
    width: 100%;
  }
}


</style>
</head>
<body bgcolor="#F1F1F1">
<div class="top">
	 <a href="a.php"><h1>Cafe Express</h1></a>
    </div>
   <div class="topnav">
    <div class="subnav">
    <button class="subnavbtn"><i class="fa fa-users"> ABOUT US</i></a> </button>
    <div class="subnav-content">
      <a href="#company">Company</a>
      <a href="#team">Team</a>
      <a href="#careers">Careers</a>
    </div>
  </div>
	  <a href="register.php"><i class="fa fa-user-plus" aria-hidden="true"> REGISTER</i></a>
    <a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"> LOGIN</i></a>
    <a href="menu.php"><i class="fa fa-cutlery" aria-hidden="true"> MENUE</i></a>
    <a href="a.php"><i class="fa fa-home"> HOME</i></a>
	</div>
<br>
<div class="row">
  <div class="column side">
  	<h1 style="font-family:brandon_grotesque_black;">
    <h2>We’ve got something for everyone!! <i class="fa fa-coffee" aria-hidden="true"></i>.</h2>
    

  </div>
  
  <div class="column middle">
  	
  	

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 5</div>
  <img src="burger.jpg" style="width:100%">
  <div class="text">Burger</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 5</div>
  <img src="glass.jpg" style="width:100%">
  <div class="text">Ice Cream</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 5</div>
  <img src="cake.jpg" style="width:100%">
  <div class="text">Cake</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">4 / 5</div>
  <img src="icecream.jpg" style="width:100%">
  <div class="text">Ice Cream</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">5 / 5</div>
  <img src="cookies.jpg" style="width:100%">
  <div class="text">Cookies</div>
</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
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

</body>
</html>