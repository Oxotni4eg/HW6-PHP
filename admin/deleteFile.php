<?php

if (!isset($_COOKIE['Autorization'])) {
    header('Location: ./index.php');
}

$deleteFile = $_POST['deleteFile'];

if ((!empty($_POST['deleteFile'])) && (is_file($deleteFile) == true)) {
    unlink("$deleteFile");
    header('Location: ./explorer.php');
} else {
    header('Location: ./error.php');
}

