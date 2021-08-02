<?php


$addFile = $_POST['addFile'];

// ПОЧЕМУ НЕ РАБОТАЕТ FOPEN ??

/*if (!empty($_POST['addFile']) && (is_file($addFile) == false)) {
    $handle = fopen("test.php",'r+');
    fclose($handle);
    header('Location: ./');
} else {
    header('Location: ./error.php');
}*/

if (!empty($_POST['addFile']) && (is_file($addFile) == false)) {
    file_put_contents($addFile,'');
    header('Location: ./');
} else {
    header('Location: ./error.php');
}


