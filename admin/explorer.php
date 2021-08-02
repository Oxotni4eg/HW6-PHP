<?php

$startDir = pathinfo(__DIR__);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Файловый менеджер</title>
    <link rel="stylesheet" href="./FormStyle/formStyle.css" />
</head>
<body>

<div class="addDirForm AllForm">
<form action="addDir.php" method="POST" id="addDirForm">
    <fieldset>
        <legend>Создание новой директории</legend>
        <input class="inputNameDir AllInput" type="text" name="nameDir" placeholder="Введите название каталога для создания" />
        <input class="inputSubmit" type="submit" value="Создать" />
    </fieldset>
</form>
</div>

<div class="AllForm">
    <form action="renameDir.php" method="POST">
        <fieldset>
            <legend>Переименование каталога</legend>
            <input class="inputNameDir AllInput" type="text" name="oldNameDir" placeholder="Введите старое название каталога" />
            <input class="inputNameDir AllInput" type="text" name="newNameDir" placeholder="Введите новое название каталога" />
            <input class="inputSubmit" type="submit" value="Переименовать" />
        </fieldset>
    </form>
</div>

<div class="AllForm">
    <form action="deleteDir.php" method="POST">
        <fieldset>
            <legend>Удаление каталога</legend>
            <input class="inputNameDir AllInput" type="text" name="deleteNameDir" placeholder="Введите название каталога для удаления" />
            <input class="inputSubmit" type="submit" value="Удалить" />
        </fieldset>
    </form>
</div>

<div class="AllForm">
    <form action="addFile.php" method="POST">
        <fieldset>
            <legend>Создание файла</legend>
            <input class="inputNameDir AllInput" type="text" name="addFile" placeholder="Введите название файла с расширением!" />
            <input class="inputSubmit" type="submit" value="Создать" />
        </fieldset>
    </form>
</div>

<div class="AllForm">
    <form action="renameFile.php" method="POST">
        <fieldset>
            <legend>Переименование файла</legend>
            <input class="inputNameDir AllInput" type="text" name="oldFile" placeholder="Введите название старого файла с расширением!" />
            <input class="inputNameDir AllInput" type="text" name="newFile" placeholder="Введите название нового файла с расширением!" />
            <input class="inputSubmit" type="submit" value="Переименовать" />
        </fieldset>
    </form>
</div>

<div class="AllForm">
    <form action="deleteFile.php" method="POST">
        <fieldset>
            <legend>Удаление файла</legend>
            <input class="inputNameDir AllInput" type="text" name="deleteFile" placeholder="Введите название файла с расширением для удаления!" />
            <input class="inputSubmit" type="submit" value="Удалить" />
        </fieldset>
    </form>
</div>

<div class="AllForm">
    <form action="workFile.php" method="POST">
        <fieldset>
            <legend>Редактирование файла</legend>
            <input class="inputNameDir AllInput" type="text" name="workFile" placeholder="Введите название файла с расширением для редактирования!" />
            <input class="inputSubmit" type="submit" value="Открыть" />
        </fieldset>
    </form>
</div>

<div class="AllForm">
    <form action="uploader.php" method="POST" enctype="multipart/form-data">
        <fieldset>
            <legend>Загрузчик файлов</legend>
            <input class="inputFiles AllInput" type="file" name="files[]" multiple/>
            <button class="inputSubmit">Отправить</button>
        </fieldset>
    </form>
</div>

</body>
</html>



