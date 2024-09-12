<?php
//header('Content-Type: application/json');

// Database connection
$host = 'mysql';
$dbname = 'your_database';
$username = 'your_username';
$password = 'your_password';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


//$sql = "SELECT * FROM videos";
?>
