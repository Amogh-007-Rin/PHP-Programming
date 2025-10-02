<?php
// Chapter 21: Radio buttons & checkboxes processing
if($_SERVER['REQUEST_METHOD']==='POST'){
    echo 'Radio: ' . ($_POST['color'] ?? 'none') . "\n";
    echo 'Checkboxes: ' . implode(',', $_POST['fruits'] ?? []) . "\n";
}
?>
<form method="POST">
    <label><input type="radio" name="color" value="red"> Red</label>
    <label><input type="radio" name="color" value="blue"> Blue</label><br>
    <label><input type="checkbox" name="fruits[]" value="apple"> Apple</label>
    <label><input type="checkbox" name="fruits[]" value="banana"> Banana</label>
    <button>Submit</button>
</form>
<?php
?>