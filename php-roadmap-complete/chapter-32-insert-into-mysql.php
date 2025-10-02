<?php
// Chapter 32: Insert into MySQL (prepared statement)
$host='127.0.0.1'; $user='root'; $pass=''; $db='test';
$conn = new mysqli($host,$user,$pass,$db);
$stmt = $conn->prepare('INSERT INTO users (username,password) VALUES (?,?)');
$stmt->bind_param('ss', $u, $p);
$u = 'student'; $p = password_hash('secret', PASSWORD_DEFAULT);
$stmt->execute();
echo 'Inserted ID: ' . $stmt->insert_id;
$stmt->close(); $conn->close();
?>