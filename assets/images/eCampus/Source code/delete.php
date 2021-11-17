<?php
	include('database_connection.php');
	$id=$_GET['id'];
	mysqli_query($conn,"delete from staff_info where userid='$id'");
	header('location:staff_management.php');
 
?>