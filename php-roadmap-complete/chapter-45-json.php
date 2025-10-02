<?php
// Chapter 45: JSON encode/decode
$data = ['name'=>'Amogh','role'=>'student'];
$json = json_encode($data);
echo 'JSON: ' . $json . "\n";
$decoded = json_decode($json, true);
echo 'Name from JSON: ' . $decoded['name'] . "\n";
?>