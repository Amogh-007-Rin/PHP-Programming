<?php
// Chapter 24: Sanitize / Validate inputs
// Use filter_input to sanitize GET/POST values
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
if($_SERVER['REQUEST_METHOD']==='POST'){
    echo 'Name: ' . ($name ?: 'invalid') . "\n";
    echo 'Email: ' . ($email ?: 'invalid') . "\n";
}
?>
<form method="POST">
    <input name="name" placeholder="Name">
    <input name="email" placeholder="Email">
    <button>Send</button>
</form>
<?php
?>