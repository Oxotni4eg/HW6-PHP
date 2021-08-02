<?php
session_start();
$workFile = $_POST['workFile'];
$_SESSION['workFile'] = $workFile;

if ((!empty($_POST['workFile'])) && (is_file($workFile) == true)) { ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Редактор файла</title>
        <link rel="stylesheet" href="./FormStyle/formStyle.css" />
    </head>
    <body>

    <div class="fileInfo">
        <p>Путь до файла: <?php print_r(__DIR__); ?>\<?php echo $workFile; ?></p>
        <p>Размер файла в Кб: <?php echo filesize($workFile) / 1000; ?></p>
        <p><?php echo "Файл $workFile в последний раз был изменён: " . date("F d Y H:i:s.", filectime($workFile)); ?></p>
    </div>

    <div class="AllForm">
        <form action="saveFile.php" method="POST">
            <fieldset>
                <legend>Редактирование файла</legend>
                <textarea name="message" cols="100" rows="50"><?php echo file_get_contents($workFile); ?></textarea>
                <a class="returnFileManager" href="./index.php">Закрыть</a>
                <input class="inputSubmit" type="submit" value="Сохранить" />
            </fieldset>
        </form>
    </div>

    </body>
    </html>



  <?php //header('Location: ./');
} else {
    header('Location: ./error.php');
}

?>
