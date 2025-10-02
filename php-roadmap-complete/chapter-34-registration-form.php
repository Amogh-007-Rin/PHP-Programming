<?php
// Chapter 34: Simple registration form (no persistent storage here)
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $u = htmlspecialchars($_POST['username']);
    $p = password_hash($_POST['password'], PASSWORD_DEFAULT);
    echo "Registered: $u\n";
}
?>
<form method="POST">
    <input name="username" required placeholder="Username"><br>
    <input type="password" name="password" required placeholder="Password"><br>
    <button>Register</button>
</form>
<?php
?>