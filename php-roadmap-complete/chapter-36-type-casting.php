<?php
// Chapter 36: Type casting examples
$a = '123'; $int = (int)$a; $float = (float)'3.14';
echo gettype($int) . ': ' . $int . "\n";
echo gettype($float) . ': ' . $float . "\n";
?>