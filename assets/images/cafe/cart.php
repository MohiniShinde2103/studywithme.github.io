<?php
  if(isset($_POST['regis']))
   {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "conference";
$f=$_POST['fname'];
$m=$_POST['mname'];
$l=$_POST['lname'];
$e=$_POST['email'];
$p=$_POST['pass'];
$mo=$_POST['mobile'];
$d=$_POST['dob'];
$lo=$_POST['loc'];
?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"> 

<style>
.header {
  background-color: #F1F1F1;
  text-align: center;
  padding: 6px;
  font-style: oblique;
  font-family: brandon_grotesque_black;
  font-size: 18px;

}
.button:hover {
  background-color: dodgerBlue;
}
.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}
.button {
  background-color: dodgerBlue;
  border: none;
  color: black;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 16px;
}
.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
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
  width: 40%;
  font-family: brandon_grotesque_black;
  font-size: 35px;
}
.column.right
{
  width: 30%;
  font-size: 35px;
  font-family: brandon_grotesque_black;

}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column.side, .column.middle {
    width: 100%;
  }
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

.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
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
body {
 background-image: url("bg.jpg");
 background-color: #cccccc;
 background-repeat:no-repeat;
  background-size: cover;
  font-family: brandon_grotesque_black;
  color: #FFF8DC;
}
.rightpane{
    width: 30%;
  font-size: 35px;
  font-family: brandon_grotesque_black;
  float:right;
}
/* Links - change color on hover */
.top a:hover {
  color: red;
}</style>
</head>
<body>
<div class="top">
   <a href="a.php"><h2>CAFE EXPRESS</h2></a>
    </div>
   <div class="topnav">
    <a href="team.html"><i class="fa fa-users"> ABOUT US</i></a>
    <a href="register.php"><i class="fa fa-user-plus" aria-hidden="true"> REGISTER</i></a>
    <a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"> LOGIN</i></a>
    <a href="menu.php"><i class="fa fa-cutlery" aria-hidden="true">MENUE</i></a>
    <a href="a.php"><i class="fa fa-home"> HOME</i></a>
  </div>
<br>  
  <div class="row">
  <div class="column side">
    <div class="card">
      <form  method="post" >
      
    <h1 style="font-family:brandon_grotesque_black;">
    <h2>***STARTER***</h2>
    <form action="cart.php">
  <input type="checkbox" id="menu1" name="menu1" value="mushrooms">
  <label for="menu1"> Roasted stuffed mushrooms</label><br>
  <input type="checkbox" id="menu2" name="menu2" value="rings">
  <label for="menu2"> Bacon rings</label><br>
  <input type="checkbox" id="menu3" name="menu3" value="onion">
  <label for="menu3"> Blooming onion</label><br><br>
  <input type="checkbox" id="menu4" name="menu4" value="croquettes">
  <label for="menu4"> Chorizo croquettes</label><br>
  <input type="checkbox" id="menu5" name="menu5" value="cigars">
  <label for="menu5"> Moroccan lamb cigars</label><br>
  <input type="checkbox" id="menu6" name="menu6" value="oysters">
  <label for="menu6"> Asian-style oysters</label><br><br>
  
</div>
</div>
 <div class="column middle">
  <div class="card">
     <h1 style="font-family:brandon_grotesque_black;">
    <h2>***LUNCH***</h2>
  <input type="checkbox" id="lunch1" name="lunch1" value="mushrooms">
  <label for="lunch1"> Moong dal khichdi</label><br>
  <input type="checkbox" id="lunch2" name="lunch2" value="rings">
  <label for="lunch2"> Biryani rice (Kuska rice)</label><br>
  <input type="checkbox" id="lunch3" name="lunch3" value="onion">
  <label for="lunch3"> Rice, sambhar and curd</label><br><br>
  <input type="checkbox" id="lunch4" name="lunch4" value="croquettes">
  <label for="lunch4"> Tomato rice</label><br>
  <input type="checkbox" id="lunch5" name="lunch5" value="cigars">
  <label for="lunch5"> Grilled chicken</label><br>
  <input type="checkbox" id="lunch6" name="lunch6" value="oysters">
  <label for="lunch6"> Chicken Tikka Masala</label><br><br>
 
</div>
</div>
  <div class="rightpane">
  <div class="card">
     <h1 style="font-family:brandon_grotesque_black;">
    <h2>***DINNER***</h2>
  <input type="checkbox" id="lunch1" name="lunch1" value="mushrooms">
  <label for="lunch1"> Coconut Vegetarian Korma</label><br>
  <input type="checkbox" id="lunch2" name="lunch2" value="rings">
  <label for="lunch2"> Dal Makhani</label><br>
  <input type="checkbox" id="lunch3" name="lunch3" value="onion">
  <label for="lunch3"> Shahi Egg Curry</label><br><br>
  <input type="checkbox" id="lunch4" name="lunch4" value="croquettes">
  <label for="lunch4"> Ajwaini Paneer Kofta Curry</label><br>
  <input type="checkbox" id="lunch5" name="lunch5" value="cigars">
  <label for="lunch5"> Butter Chicken</label><br>
  <input type="checkbox" id="lunch6" name="lunch6" value="oysters">
  <label for="lunch6"> Mutton Do Pyaaza</label><br><br>
  </div>
  </div></div>
  
  <div class="column middle">
  <center><a href="login.php"><button type="submit" class="button" name="cart" style="height:70px; width:260px; bottom=50%; font-family:brandon_grotesque_black; font-size: 25px;" /><span>ADD TO CART</span></button></a></h3></center>
</div>
</form>

</body>
</html>