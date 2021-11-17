<?php
	include('database_connection.php');
 
	$id=$_GET['id'];
 
	$fname=$_POST['fname'];
	$username=$_POST['username'];
	$password=$_POST['password'];
 
 
	mysqli_query($conn,"update stud_info set fname='$fname', uname='$username', password='$password' where uname='$id'");
	header('location:student_management.php');
 
?>
