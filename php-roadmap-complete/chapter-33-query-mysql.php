<?php
// Chapter 33: Query MySQL and fetch results
$host='127.0.0.1'; $user='root'; $pass=''; $db='test';
$conn = new mysqli($host,$user,$pass,$db);
$res = $conn->query('SELECT id,username FROM users LIMIT 10');
while($row = $res->fetch_assoc()){
    echo $row['id'] . ': ' . $row['username'] . "\n";
}
$res->free(); $conn->close();
?>