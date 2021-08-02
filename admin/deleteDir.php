<?php


$deleteNameDir = $_POST['deleteNameDir'];

if ((!empty($_POST['deleteNameDir'])) && (is_dir($deleteNameDir) == true)) {
    rmdir("$deleteNameDir");
    header('Location: ./');
} else {
    header('Location: ./error.php');
}

