<?php
    require('incl/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="header2">
        <div class="container">
            <div class="header-content">
                <img src="img/logo.png" alt="logo" class="header-logo">
                <ul class="header-menu">
                    <li class="header-item">
                        <a href="index.php" class="header-link">Главная</a>
                    </li>
                    <li class="header-item">
                        <a href="index.php#benefits" class="header-link">Преимущества</a>
                    </li>
                    <li class="header-item">
                        <a href="index.php#catalog" class="header-link">Каталог</a>
                    </li>
                    <li class="header-item">
                        <a href="index.php#contacts" class="header-link">Контакты</a>
                    </li>
                </ul>
                <div class="header-btns">
                    <a href="#" class="header-btn">Вход</a>
                    <a href="#" class="header-btn">Регистрация</a>
                </div>
            </div>
        </div>
    </header>
</body>
</html>