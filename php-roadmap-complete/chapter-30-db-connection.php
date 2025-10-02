<?php
// Chapter 30: PHP connection to MySQL (mysqli)
$host = '127.0.0.1'; $user = 'root'; $pass = ''; $db = 'test';
// Attempt connection (note: ensure MySQL + DB exist in XAMPP)
$conn = new mysqli($host,$user,$pass,$db);
if($conn->connect_error) die('Connect error: ' . $conn->connect_error);
echo 'Connected to MySQL via mysqli\n';
$conn->close();
?>