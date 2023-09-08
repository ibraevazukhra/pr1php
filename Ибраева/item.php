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
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header">
        <div class="header_inner container">
            <div class="header_logo">
                <img src="img/logo.png" alt="">
            </div>
            <div class="header_nav">
                <ul class="header_nav_list">
                    <li class="header_nav_item">
                        <a href="#" class="header_nav_link">
                            Новинки
                        </a>
                    </li>
                    <li class="header_nav_item">
                        <a href="#" class="header_nav_link">
                            Распродажа
                        </a>
                    </li>
                    <li class="header_nav_item">
                        <a href="#" class="header_nav_link">
                            Коллекции
                        </a>
                    </li>
                </ul>
            </div>
            <div class="header_icons">
                <a href="#" class="header_icons_link">
                    <img src="img/search_icon.png" alt="">
                </a>
                <a href="#" class="header_icons_link">
                    <img src="img/user_icon.png" alt="">
                </a>
            </div>
        </div>
    </header>
    <section class="tovar">
        <div class="df aic container">
            <div class="tovar_img">
                <img src="img/item.png" alt="">
            </div>
            <div class="tovar_description">
            <div class="tovar_description">
                    <div class="df jcsb aic">
                <?php
                if(isset($_GET['id'])){
                $get_id = $_GET['id'];
                $sql = "SELECT * FROM item";
                $result = $link -> query($sql);
                $new = $result -> fetch();?>
                    <p class="tovar_name">
                        <?=$new['name']?>
                    </p>
                    <a href="delete.php?id=<?=$new['id'] ?>" class="tovar_button">Удалить</a>
                    <p class="tovar_category">
                        <?=$new['categories']?>
                    </p>
                    <p class="tovar_price">
                        <?=$new['price']?>
                    </p>
                    <p class="tovar_text">
                        <?=$new['opisanie']?>
                    </p>
                    <p class="tovar_color">
                        <?=$new['color']?>
                    </p>
                    <a href="update.php?id=<?=$new['id'] ?>" class="tovar_button">
                        <b>Редактировать</b>
                    </a>
                <?}else{
            echo 'Ошибка выбора';
        }
        ?>
                </div></div>
        </div>
    </section>
    <footer class="footer">
        <div class="footer_inner container">
            <div class="footer_logo">
                <img src="img/logo.png" alt="">
            </div>
            <div class="header_nav">
                <ul class="header_nav_list">
                    <li class="header_nav_item">
                        <a href="#" class="header_nav_link">
                            Новинки
                        </a>
                    </li>
                    <li class="header_nav_item">
                        <a href="#" class="header_nav_link">
                            Распродажа
                        </a>
                    </li>
                    <li class="header_nav_item">
                        <a href="#" class="header_nav_link">
                            Коллекции
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>