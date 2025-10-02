<?php
// Chapter 38: Date & Time
echo 'Now: ' . date('Y-m-d H:i:s') . "\n";
$dt = new DateTime('2025-10-02 12:00:00');
echo 'Formatted: ' . $dt->format('d M Y, H:i') . "\n";
?>