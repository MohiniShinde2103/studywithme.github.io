<?php
	include('database_connection.php');
	$id=$_GET['id'];
	mysqli_query($conn,"delete from images where id='$id'");
	header('location:action_on_notice.php');
 
?>