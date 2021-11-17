<?php
	include('database_connection.php');
 
	$staffname=$_POST['staffname'];
	$username=$_POST['username'];
	$password=$_POST['password'];
 
	mysqli_query($conn,"insert into staff_info (staffname, username, password) values ('$staffname', '$username', '$password')");
	header('location:staff_management.php');
 
?>