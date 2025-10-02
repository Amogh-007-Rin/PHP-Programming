<?php
// Chapter 48: Sending mail (basic example)
// PHPMailer is recommended in real projects. Below shows PHP mail() simple example (may require local mail server).
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $to = $_POST['to']; $subject = 'Test Mail'; $message = 'Hello from PHP';
    // Note: mail() may not work on default XAMPP without configuration
    $sent = mail($to, $subject, $message);
    echo $sent ? 'Mail sent (may be queued)' : 'Mail failed or disabled on local dev';
}
?>
<form method="POST">
    <input name="to" placeholder="recipient@example.com"><button>Send</button>
</form>
<?php
?>