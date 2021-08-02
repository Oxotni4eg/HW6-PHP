<?php

if (!isset($_COOKIE['Autorization'])) {
    header('Location: ./index.php');
}

$addFile = $_POST['addFile'];

if (!empty($_POST['addFile']) && (is_file($addFile) == false)) {
    file_put_contents($addFile,'');
    header('Location: ./explorer.php');
} else {
    header('Location: ./error.php');
}


