<?php
// Chapter 13: $_GET and $_POST examples
if(isset($_GET['name'])){
    echo "Hello (GET): " . htmlspecialchars($_GET['name']) . "\n";
}
?>
<form method="POST">
    <input name="username" placeholder="POST name">
    <button>Send POST</button>
</form>
<?php
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username'])){
    echo "Hello (POST): " . htmlspecialchars($_POST['username']) . "\n";
}
?>