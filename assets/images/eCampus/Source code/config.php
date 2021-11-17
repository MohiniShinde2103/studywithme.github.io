<?php
ini_set("display_errors","on");
if(!isset($dbh)){
 session_start();
 date_default_timezone_set("UTC"); // Set Time Zone
 $host = "sql311.epizy.com"; // Hostname
 $port = "3306"; // MySQL Port : Default : 3306
 $user = "epiz_25827727"; // Username Here
 $pass = "0vwlrWNM5hh"; //Password Here
 $db   = "epiz_25827727_ecampus"; // Database Name
 $dbh  = new PDO('mysql:dbname='.$db.';host='.$host.';port='.$port,$user,$pass);
 
 /*Change The Credentials to connect to database.*/
 include("user_online.php");
}
?>
