<?php if (!isset($_COOKIE['Autorization'])) {
header('Location: ./index.php');
};
?>

<div style="text-align: center">
    <h1>Вы ввели неверные(пустые) данные!</h1>
    <p>Через 5 секунд вы будете перенаправлены на стартовую страницу</p>
</div>

<?php
header('Refresh: 5; url=/admin/explorer.php');
?>
