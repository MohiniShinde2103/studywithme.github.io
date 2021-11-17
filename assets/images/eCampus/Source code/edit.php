<?php
	include('database_connection.php');
 
	$id=$_GET['id'];
 
	$staffname=$_POST['staffname'];
	$username=$_POST['username'];
	$password=$_POST['password'];
 
 
	mysqli_query($conn,"update staff_info set staffname='$staffname', username='$username', password='$password' where userid='$id'");
	header('location:staff_management.php');
 
?>
