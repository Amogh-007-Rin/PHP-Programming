<?php
// Chapter 26: $_COOKIE example
if(!isset($_COOKIE['visits'])){
    setcookie('visits', 1, time()+3600);
    echo "First visit\n";
} else {
    $v = (int)$_COOKIE['visits'] + 1;
    setcookie('visits', $v, time()+3600);
    echo "Visit number: $v\n";
}
?>