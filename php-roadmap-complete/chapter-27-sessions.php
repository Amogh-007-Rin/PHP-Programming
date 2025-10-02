<?php
// Chapter 27: $_SESSION example
session_start();
if(!isset($_SESSION['counter'])) $_SESSION['counter'] = 0;
$_SESSION['counter']++;
echo "Session counter: " . $_SESSION['counter'] . "\n";
?>