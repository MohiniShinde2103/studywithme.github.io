<?php
	include('database_connection.php');
 
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$uname=$_POST['rno'];
$password=$_POST['password'];
$options = array("cost"=>4);
 $hashPassword = password_hash($password,PASSWORD_BCRYPT,$options);
$mobileno=$_POST['mobileno'];

 
	mysqli_query($conn,"INSERT INTO stud_info(fname,lname,uname,password,mobileno,post) VALUES ('$fname', '$lname', '$uname', '$hashPassword', '$mobileno','Student')");
	header('location:student_management.php');
 
?>