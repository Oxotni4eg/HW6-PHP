<?php
/*echo '<pre>';
print_r($_FILES);
echo '</pre>';*/

if (!isset($_COOKIE['Autorization'])) {
    header('Location: ./index.php');
}

$destPath = './uploads';
if (!file_exists($destPath)) {
    mkdir($destPath);
}

$allFiles = scandir($destPath);

function translit($text_for_translit){
    $arr_rus=['а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п','р','с','т','у','ф','х','ц','ч','ш','щ','ь','ы','ъ','э','ю','я', ' ', '*', '/'];
    $arr_lat=['a','b','v','g','d','e','jo','zh','z','i','j','k','l','m','n','o','p','r','s','t','u','f','h','cz','ch','sh','shh','`','y','``','e`','yu','ya', '_', '_', '_'];
    $arr_translit = array_combine($arr_rus,$arr_lat); // создаем таблицу транлитерации. В этом случае, ключи и значения могут иметь любую длину, за исключением того, что ключи не должны быть пустыми. Кроме того, длина возвращаемого значения может отличаться от string. Однако, стоит учесть тот факт, что эта функция максимально эффективна в том случае, если все ключи имеют одинаковый размер.
    $text_for_translit = mb_strtolower($text_for_translit);
    $translit_1=strtr($text_for_translit, $arr_translit); // транслитерация. Преобразует заданные символы или заменяет подстроки
    return $translit_1;
}

foreach ($_FILES['files']['tmp_name'] as $index => $path) {
    if (file_exists($path)) {

        $fileInfo = pathinfo($_FILES['files']['name'][$index]);

        $translitName = translit($fileInfo['filename']);

        $findFiles = preg_grep("/^" . $translitName. "(.+)?\." . $fileInfo['extension'] . "$/", $allFiles);

        $fileName = $translitName . (count($findFiles) > 0 ? '_' . (count($findFiles)+1) : '') . '.' . $fileInfo['extension'];

        move_uploaded_file($path, $destPath . '/' . $fileName);
    }
}

header('Location: ./explorer.php');
