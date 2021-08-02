<?php


$nameDir = $_POST['nameDir'];

if (!empty($_POST['nameDir']) && (is_dir($nameDir) == false)) {
    mkdir("$nameDir");
    header('Location: ./');
} else {
    header('Location: ./error.php');
}
