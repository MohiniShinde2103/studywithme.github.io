<?php
	include('database_connection.php');
	$id=$_GET['id'];
	mysqli_query($conn,"delete from stud_info where uname='$id'");
	header('location:student_management.php');
 
?>