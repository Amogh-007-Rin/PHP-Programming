<?php
// Chapter 47: File upload handling (move_uploaded_file example)
if($_SERVER['REQUEST_METHOD']==='POST' && isset($_FILES['upload'])){
    $dest = 'uploads/' . basename($_FILES['upload']['name']);
    if(!is_dir('uploads')) mkdir('uploads');
    if(move_uploaded_file($_FILES['upload']['tmp_name'], $dest)){
        echo 'Saved to ' . $dest . "\n";
    } else echo 'Upload failed';
}
?>
<form method="POST" enctype="multipart/form-data">
    <input type="file" name="upload"><button>Upload</button>
</form>
<?php
?>