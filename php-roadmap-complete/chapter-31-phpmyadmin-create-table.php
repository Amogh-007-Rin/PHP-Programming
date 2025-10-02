<?php
// Chapter 31: Creating a table via PHP (mysqli)
// This creates a sample table if it doesn't exist.
$host='127.0.0.1'; $user='root'; $pass=''; $db='test';
$conn = new mysqli($host,$user,$pass,$db);
$sql = "CREATE TABLE IF NOT EXISTS users (id INT AUTO_INCREMENT PRIMARY KEY, username VARCHAR(50), password VARCHAR(255))";
if($conn->query($sql)) echo "Table users ready\n"; else echo "Error: " . $conn->error;
$conn->close();
?>