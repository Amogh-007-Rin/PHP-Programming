<?php
// Chapter 39: File handling (read/write)
$filename = 'data_sample.txt';
file_put_contents($filename, "Line1\nLine2\n");
echo 'Saved file size: ' . filesize($filename) . "\n";
echo 'Contents:\n' . file_get_contents($filename);
?>