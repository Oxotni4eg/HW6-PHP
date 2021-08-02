<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Treehouse-Home</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>

<div class="adminPanel">
    <div class="container">
        <?php
        if (!isset($_COOKIE['Autorization'])) {
            echo '<a href="login.php">Войти</a>';
        } else {
            echo '<a href="logout.php">Выйти</a>';
        }
        ?>
    </div>
</div>

<header class="header">
    <div class="container">
        <a href="index.php"><img src="uploads/Logo.png" alt="#" /></a>
        <nav>
            <ul class="nav">
                <li><a href="index.php">Главная</a></li>
                <li><a href="about.php">О Нас</a></li>
                <li><a href="uslugi.php">Услуги</a></li>
                <li><a href="contact.php">Контакты</a></li>
                <?php if (isset($_COOKIE['Autorization'])) {
                    echo '<li><a href="explorer.php">Файловый менеджер</a></li>';
                } ?>

            </ul>
        </nav>
    </div>
</header>


<footer class="footer padding">
    <div class="footer-information">
        <div class="container-background">
            <div class="container">
                <ul class="main-footer-list">

                    <li class="main-footer-list-li">
                        <h4>Contact Us</h4>

                        <ul class="contact-us-footer-list">
                            <li><a href="#" class="adress">55 main St. Toronto, ON MIH 3A5</a></li>
                            <li><a href="#" class="mobile">(416) 555-5252</a></li>
                            <li><a href="#" class="email">hello@treehouse.com</a></li>
                        </ul>

                    </li>

                    <li class="main-footer-list-li">
                        <h4>Latest Tweets</h4>

                        <ul class="latest-tweets-footer-list">
                            <li><a href="#">Confucious: Life is really simple, but we insist on making it complicated.</a><a href="#" class="bold">#famousquotes</a><span class="tweet-time">8 mins ago</span></li>
                            <li><a href="#">Grab the Free Treehouse web teamplate at FreebiesXpress!</a><a href="#" class="bold">#freebies #templates</a><span class="tweet-time">2 days ago</span></li>
                        </ul>

                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div class="footer-messangers padding">
        <div class="container">
            <span class="copyright">&copy; Copyright 2014 FreebiesXpress.com</span>
            <ul>
                <li><a href="#" class="a-tw"></a></li>
                <li><a href="#" class="a-fb"></a></li>
                <li><a href="#" class="a-pr"></a></li>
                <li><a href="#" class="a-gm"></a></li>
            </ul>
        </div>
    </div>
</footer>

</body>
</html>

