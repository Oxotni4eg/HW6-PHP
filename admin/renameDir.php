<?php


$oldNameDir = $_POST['oldNameDir'];
$newNameDir = $_POST['newNameDir'];

if ((!empty($_POST['oldNameDir'])) && (!empty($_POST['oldNameDir'])) && (is_dir($oldNameDir) == true)) {
    rename("$oldNameDir", "$newNameDir");
    header('Location: ./');
} else {
    header('Location: ./error.php');
}

