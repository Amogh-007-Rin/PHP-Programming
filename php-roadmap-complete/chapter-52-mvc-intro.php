<?php
// Chapter 52: Simple MVC intro (very small example)
// This is only a conceptual single-file demo of routing + controller + view
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if($path === '/hello'){
    // Controller logic
    $name = $_GET['name'] ?? 'Guest';
    // View
    echo "<h1>Hello, " . htmlspecialchars($name) . "</h1>";
} else {
    echo "<a href='?route=home'>Home</a> - <a href='/hello?name=Amogh'>Say Hello</a>";
}
?>