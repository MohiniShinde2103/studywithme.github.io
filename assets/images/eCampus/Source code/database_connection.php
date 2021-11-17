<?php
$host='sql311.epizy.com';
$username='epiz_25827727';
$password='0vwlrWNM5hh';
$db_name='epiz_25827727_ecampus';
$conn=mysqli_connect($host,$username,$password) or die('not connected');
mysqli_select_db($conn,$db_name)or die('selection failed');
?>
