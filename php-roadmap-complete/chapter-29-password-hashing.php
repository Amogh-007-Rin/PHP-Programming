<?php
// Chapter 29: Password hashing & verify
$pw = 'mypassword123';
$hash = password_hash($pw, PASSWORD_DEFAULT);
echo 'Hash: ' . $hash . "\n";
echo password_verify('mypassword123', $hash) ? 'Verified' : 'Invalid';
?>