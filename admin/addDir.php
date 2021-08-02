<?php

if (!isset($_COOKIE['Autorization'])) {
    header('Location: ./index.php');
}

$nameDir = $_POST['nameDir'];

if (!empty($_POST['nameDir']) && (is_dir($nameDir) == false)) {
    mkdir("$nameDir");
    header('Location: ./explorer.php');
} else {
    header('Location: ./error.php');
}
