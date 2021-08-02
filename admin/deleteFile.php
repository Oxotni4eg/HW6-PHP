<?php

$deleteFile = $_POST['deleteFile'];

if ((!empty($_POST['deleteFile'])) && (is_file($deleteFile) == true)) {
    unlink("$deleteFile");
    header('Location: ./');
} else {
    header('Location: ./error.php');
}

