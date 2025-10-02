<?php
// Chapter 28: $_SERVER usage
echo 'Request Method: ' . $_SERVER['REQUEST_METHOD'] . "\n";
echo 'Script Name: ' . $_SERVER['SCRIPT_NAME'] . "\n";
echo 'User Agent: ' . ($_SERVER['HTTP_USER_AGENT'] ?? 'unknown') . "\n";
?>