<?php
// Chapter 25: include() / require()
// create a small reusable header file and include it
file_put_contents('header_inc.php', '<h2>Site Header (generated)</h2>');
include 'header_inc.php';
echo "Page content here...\n";
?>