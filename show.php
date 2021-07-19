<?php
var_dump($_FILES);
echo "<br>";
echo "<br>";

print_r($_FILES['file']);
echo "<br>";
echo "<br>";

// echo $_POST['file'];

echo "<br>";
echo "<br>";

echo $_POST['text'];

if (isset($_POST['submit'])) {
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileSize = $_FILES['file']['size'];

    echo $fileName, $fileSize;
}
