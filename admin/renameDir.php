<?php

if (!isset($_COOKIE['Autorization'])) {
    header('Location: ./index.php');
}

$oldNameDir = $_POST['oldNameDir'];
$newNameDir = $_POST['newNameDir'];

if ((!empty($_POST['oldNameDir'])) && (!empty($_POST['oldNameDir'])) && (is_dir($oldNameDir) == true)) {
    rename("$oldNameDir", "$newNameDir");
    header('Location: ./explorer.php');
} else {
    header('Location: ./error.php');
}

