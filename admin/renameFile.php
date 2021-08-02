<?php

if (!isset($_COOKIE['Autorization'])) {
    header('Location: ./index.php');
}

$oldFile = $_POST['oldFile'];
$newFile = $_POST['newFile'];

if ((!empty($_POST['oldFile'])) && (!empty($_POST['newFile'])) && (is_file($oldFile) == true)) {
    rename("$oldFile", "$newFile");
    header('Location: ./explorer.php');
} else {
    header('Location: ./error.php');
}


