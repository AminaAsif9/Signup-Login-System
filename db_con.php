<?php 
session_start();
$databaseHost = 'localhost';
$databaseUsername = 'root';
$databasePassword = '';
$databaseName = 'test-user';
$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

?>