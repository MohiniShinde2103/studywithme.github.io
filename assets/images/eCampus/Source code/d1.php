<?php
// Database configuration
$dbHost     = "sql311.epizy.com";
$dbUsername = "epiz_25827727";
$dbName     = "epiz_25827727_ecampus";
$ds="0vwlrWNM5hh";
// Create database connection
$db = new mysqli($dbHost, $dbUsername,$ds, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>
