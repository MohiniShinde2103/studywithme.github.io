<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "conference";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)
 {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['login']))
{
	if(empty(trim($_POST['email'])))
{
	echo "<script>alert('Enter email');</script>";
}
else if (empty(trim($_POST['pass']))) 
{
	echo "<script>alert('Enter Password');</script>";
}

$e = $_POST['email'] ;
$p = $_POST['pass'];

$sql = "SELECT * FROM register WHERE email = '$e' and pass = '$p'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
if($count == 1)
{
	 // Store data in session variables
         echo "<script>alert('correct details!!');</script>";  
         header("location: menu.php");                 
}
else
{
	echo "<script>alert('incorrect details!!');</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
<meta name="google-signin-client_id" content="1054179242566-e4vcd2ofsoc7qp68e9ia1dst48kfp730.apps.googleusercontent.com">
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"> 
 
<style>
	* {
  box-sizing: border-box;
}
/* add appropriate colors to  google buttons */




body {
 font-family:brandon_grotesque_black;
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
  background-color: #f1f1f1;
  font-family:brandon_grotesque_black;
 
}
.container {
  padding: 16px;
  background-color:  #F1F1F1;
}
.signin {
  background-color: #f1f1f1;
  text-align: center;}
  .col {
    width: 100%;
    margin-top: 0;
  }
body {
  font-family:brandon_grotesque_black;
  color: black;
}
.header {
  background-color: #F1F1F1;
  text-align: center;
  padding: 2px;
  font-style: oblique;
  font-family:brandon_grotesque_black;
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
  font-family:brandon_grotesque_black;

}

/* Links - change color on hover */
.top a:hover {
  color: red;
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
	border-radius: 4px;
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
	border-radius: 4px;
	margin:8px 0;
	outline: none;
	padding: 8px;
	box-sizing: border-box;
	transition: .3s;

}
input[type=Password]:focus
{
 border-color: dodgerBlue;
box-shadow: 0 0 8px 0 dodgerBlue;
}
.inputWithIcon input[type=text]
{
padding-left: 40px;
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
left: 290px;

top:8px;
padding: 9px 8px;
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
      <img src="cafe.jpg" width="600" height="600">
    </div>
  </div>
  <div class="column">
    <div class="card">
    	
    		<script >
		  function onSignIn(googleUser) {
		  var profile = googleUser.getBasicProfile();
		  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
		  console.log('Name: ' + profile.getName());
		  console.log('Image URL: ' + profile.getImageUrl());
		  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
			}
			</script>
		<script>
		  function signOut() {
		    var auth2 = gapi.auth2.getAuthInstance();
		    auth2.signOut().then(function () {
		      console.log('User signed out.');
		    });
		  }

		    </script> 
   
	      <form  method="post">
	      	<center>
	  		<div class="container">
	  			<h3 style="font-family:brandon_grotesque_black;"> 

				
    			<div class="inputWithIcon">
			    <label for="email"><b>Email ID</b></label>

                
			    <input type="text"  placeholder="Enter email id" name="email" required>
			    <i class="fa fa-envelope fa-lg-fa-fw" aria-hidden="true"></i> <br></div>
			    <div class="inputWithIcon">
			    <label for="email"><b>Password</b></label>
			    <input type="Password"  placeholder="Enter suitable Password" name="pass" required><br>
			     <i class="fa fa-key" aria-hidden="true"></i>
			    <p>Click here if you <a href="reset_pass.html">forget password.</a></p>
    			<button type="submit" class="button" name="login" style="height:50px; width:150px; bottom=50%; font-family:brandon_grotesque_black; font-size: 25px;" /><span>Login</span></button></h3>

    			<div class="g-signin2" data-onsuccess="onSignIn"></div>
    			<div class="container signin">
    			<p>If you are new,then click here! <a href="register.php">Sign in</a>.</p>
  				</div>
				</center> 
			
 		</div>
 </form>  
 
</div>
 </div>
 </div>
</body>
</html>