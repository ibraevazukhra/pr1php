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
                        <a href="add.php?id=<?=$new['id'] ?>" class="header_nav_link">
                            Добавить товар
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
    <section class="catalog">
        <div class="tovar_list container">

            <?php
                $sql = "SELECT * FROM will";
                $result = $link -> query($sql);
                ?>
                <?foreach($result as $new):?>
                    <div class="tovar_item">
                        <div class="tovar_item_img">
                            <img src="img/logo.png" alt="">
                        </div>
                    <p class="tovar_item_description">
                        <?=$new['text']?>
                    </p>
                    <p class="tovar_item_price">
                        <?=$new['price']?>
                    </p>
                    <a href="item.php?id=<?=$new['id'] ?>" class="tovar_item_button">Подробнее</a>
                    </div><br>
                <?endforeach?>


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