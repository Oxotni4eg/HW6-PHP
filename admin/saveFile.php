<?php

if (!isset($_COOKIE['Autorization'])) {
    header('Location: ./index.php');
}

session_start();

$message = $_POST['message'];
$message = mb_convert_encoding($message,'UTF-8');
$workFile = $_SESSION['workFile'];

$handle = fopen("./$workFile", 'w+');
fwrite($handle,"$message");
fclose($handle);

header('Location: ./explorer.php');

