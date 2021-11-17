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


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
 {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO register(fname,mname,lname,email,pass,mobno,dob,loc)VALUES('$f','$m','$l','$e','$p','$mo','$d','$lo')";

if ($conn->query($sql) === TRUE) {
         echo "<script>alert('correct details!!');</script>";  
         header("location: login.php");                 
}
    
     else {
       echo "<script>alert('Registeration Failed');</script>";                   
}


$conn->close();
}
?> 
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"> 

<style>
	* {
  box-sizing: border-box;
}

body {
  font-family: brandon_grotesque_black;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 50%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;

  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  /*background-color: #f1f1f1;*/
  background: "back.jpg"
}
.container {
  padding: 16px;
  background-color:  #F1F1F1;
}
.signin {
  background-color: #f1f1f1;
  text-align: center;}
body {
  font-family: brandon_grotesque_black;
  color: black;

}
.header {
  background-color: #F1F1F1;
  text-align: center;
  padding: 2px;
  font-style: oblique;
  font-family: brandon_grotesque_black;
  font-size: 18px;
  color: black;

}
.topnav {
  overflow: hidden;
  background-color: #333;

}

/* Navbar links */
.topnav a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Links - change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
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

.button:hover {
  background-color: dodgerBlue;
}
.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
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
input[type=text]
{
  width:40%;
  border: 2px solid #aaa;
  border-radius: 8px;
  margin:8px 0;
  outline: none;
  padding: 8px;
  box-sizing: border-box;
  transition: .3s;

}
input[type=text]:focus
{
 border-color: dodgerBlue;
box-shadow: 0 0 8px 0 dodgerBlue;
}
input[type=Password]
{
  width:40%;
  border: 2px solid #aaa;
  border-radius: 8px;
  margin:8px 0;
  outline: none;
  padding: 8px;
  box-sizing: border-box;
  transition: .3s;
  left:100;

}
input[type=Password]:focus
{
 border-color: dodgerBlue;
box-shadow: 0 0 8px 0 dodgerBlue;
}
.inputWithIcon input[type=text]
{
padding-left: 50px;
}

.inputWithIcon input[type=Password]
{
padding-left: 40px;
}
.inputWithIcon 
{
  position:relative;
}
.inputWithIcon i
{
position: absolute;
left:330px;

top:8px;
padding: 8px 6px;
color:#aaa;
transition: .3s;
}
.inputWithIcon input[type=text]:focus + i
{
 color: dodgerBlue;

}
.inputWithIcon input[type=Password]:focus + i
{
 color: dodgerBlue;

}
label
{
  width: 150px;
  display: inline-block;
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
</style>
</head>
<body bgcolor="#F1F1F1">
   <div class="top">
	 <a href="a.php"><h1>CAFE EXPRESS</h1></a>
    </div>
   <div class="topnav">
    <a href="team.html"><i class="fa fa-users"> ABOUT US</i></a>
	  <a href="register.php"><i class="fa fa-user-plus" aria-hidden="true"> REGISTER</i></a>
    <a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"> LOGIN</i></a>
    <a href="menu.php"><i class="fa fa-cutlery" aria-hidden="true"> MENUE</i></a>
    <a href="a.php"><i class="fa fa-home"> HOME</i></a>
	</div>
	<br>
	<br>
	<div class="row">
  <div class="column">
    <div class="card">
      <img src="coffee.jpg" width="600" height="600">
    </div>
  </div>


  <div class="column">
    <div class="card">
      
      <form  method="post" >
  		<div class="container">
  			<h3 style="font-family:brandon_grotesque_black;" > 

				
    			<center>
    			<div class="inputWithIcon">
			    <label for="firstname"><b>First Name</b></label>
          <input type="text" class="rounded"  placeholder="Enter first name" name="fname" required> 
          <i class="fa fa-user fa-lg-fa-fw" aria-hidden="true"></i> </div>
          <div class="inputWithIcon">
				  <label for="secondname"><b>Middle Name</b></label>
			    <input type="text" class="rounded" placeholder="Enter middle name" name="mname" required>
          <i class="fa fa-user fa-lg-fa-fw" aria-hidden="true"></i> </div>
          <div class="inputWithIcon">
				  <label for="lastname"><b>Last Name</b></label>
				  <input type="text" class="rounded" placeholder="Enter last name" name="lname" required>
          <i class="fa fa-user fa-lg-fa-fw" aria-hidden="true"></i> </div>
          <div class="inputWithIcon">
				  <label for="Mobile Number"><b>Mobile Number</b></label>
          <input type="text" class="rounded" placeholder="Enter Mobile Number" name="mobile" required>
          <i class="fa fa-phone" aria-hidden="true"></i> </div>
          <div class="inputWithIcon">
          <label for="email"><b>Email ID</b></label>
			    <input type="text" class="rounded" placeholder="Enter email id" name="email" required>
          <i class="fa fa-envelope fa-lg-fa-fw" aria-hidden="true"></i> </div>
          <div class="inputWithIcon">
          <label for="DOB"><b>Birth Date</b></label>
          <input type="text" class="rounded" placeholder="Enter Date" name="dob" required>
          <i class="fa fa-calendar" aria-hidden="true"></i> </div>
          <div class="inputWithIcon">
          <label for="location"><b>Location</b></label>
          <input type="text" class="rounded" placeholder="Enter Location" name="loc" required>
          <i class="fa fa-map-marker" aria-hidden="true"></i> </div>
          <div class="inputWithIcon">
			    <label for="Password"><b>Password</b></label>
			    <input type="Password" class="rounded" placeholder="Enter Password" name="pass" required>
          <i class="fa fa-key" aria-hidden="true"></i> </div>

 
 				<p>    
				<input type="checkbox" name="conditi" required>agree  our <a href="#">Terms & Condition</a>.</p>
    			<a href="login.php"><button type="submit" class="button" name="regis" style="height:50px; width:150px; bottom=50%; font-family:brandon_grotesque_black; font-size: 25px;" /><span>Register</span></button></h1>
          <div class="container signin">
          <p>Already have an account? <a href="login.php">Login</a>.</p>
          </div>
				</center> 
			
 		</div>
 </form>  
  
</div>
</div>
</body>
</html>