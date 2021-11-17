<?php
session_start();
   
unset($_SESSION['un']);
header("Location:1stPage.php");
?>