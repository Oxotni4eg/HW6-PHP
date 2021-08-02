<?php

if (!isset($_COOKIE['Autorization'])) {
    header('Location: ./index.php');
}

$deleteNameDir = $_POST['deleteNameDir'];

if ((!empty($_POST['deleteNameDir'])) && (is_dir($deleteNameDir) == true)) {
    rmdir("$deleteNameDir");
    header('Location: ./explorer.php');
} else {
    header('Location: ./error.php');
}

