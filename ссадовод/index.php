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
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="background">
        <header class="header">
            <div class="container">
                <div class="header-content">
                    <img src="img/logo.png" alt="logo" class="header-logo">
                    <ul class="header-menu">
                        <li class="header-item">
                            <a href="#" class="header-link">Главная</a>
                        </li>
                        <li class="header-item">
                            <a href="#benefits" class="header-link">Преимущества</a>
                        </li>
                        <li class="header-item">
                            <a href="#catalog" class="header-link">Каталог</a>
                        </li>
                        <li class="header-item">
                            <a href="#contacts" class="header-link">Контакты</a>
                        </li>
                    </ul>
                    <div class="header-btns">
                        <a href="#" class="header-btn">Вход</a>
                        <a href="#" class="header-btn">Регистрация</a>
                    </div>
                </div>
            </div>
        </header>
        <section class="banner">
            <div class="container">
                <div class="banner-content">
                    <div class="banner-arrows">
                        <img src="img/arr1.png" alt="#">
                        <div class="banner-text">
                            <h1 class="title">Скидка - 15% <br>
                                на саженцы и рассаду<br>
                                  <br>
                                до 30.04.2023</h1><br><br>
                                <a href="" class="header-btn">В каталог</a>
                        </div>
                        <img src="img/arr2.png" class="arr2" alt="#">
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="benefits" id="benefits">
        <div class="container">
            <h1 class="h1">Преимущества</h1>
            <div class="benefits-content">
                <div class="bens">
                    <img src="img/icon1.png" alt="">
                    <h3 class="ben-title">Доставка</h3><br>
                    <p class="ben-text">Быстро, качественно и недорого доставим 
                        вашу покупку до вашего участка</p>
                </div>
                <div class="bens">
                    <img src="img/icon2.png" class="icons-benefit" alt="">
                    <h3 class="ben-title">Качество</h3><br>
                    <p class="ben-text">Широкий ассортимент товаров лучшего качества, 
                        отечественных и зарубежных производителей по лучшим 
                        ценам</p>
                </div>
                <div class="bens">
                    <img src="img/icon3.png" alt="">
                    <h2 class="ben-title">Оплата</h2><br>
                    <p class="ben-text">Более 10 способов оплатить вашу покупку, 
                        как онлайн, так и в руки курьеру</p>
                </div>
            </div>
        </div>
        <div class="line"></div>
    </section>
    <section class="catalog" id="catalog">
        <div class="container"><br>
            <h1 class="h1">Каталог</h1>
            <div class="catalog-content">
                <div class="form-search">
                    <input type="text" class="input-text" placeholder="Поиск..">
                    <input type="submit" value="Поиск" class="btn">
                </div><br><br>
                <div class="tovarrr">
                    <div class="strelka1">
                        <img src="img/arr2.2.png" alt="">
                    </div>
                    <div class="product-item">
                        <?php
                            $sql = "SELECT * FROM tovar";
                            $result = $link -> query($sql);
                            $tovars = $result -> fetchAll(2);
                        ?>
                        <?foreach($tovars as $tovar):?>
                        <div class="product">
                            <br>
                            <img src="img/tovar.png" alt="photo">                     
                            <p class="ben-text"><?=$tovar['name']?></p>
                            <div class="btns-product">
                                <a href="tovar.php?id=<?php echo $tovar['id']?>" class="btn">В корзину</a>
                                <h2 class="price"><?=$tovar['price']?></h2>
                            </div>
                        </div>
                        <?endforeach?>
                    </div>
                    <div class="strelka1">
                        <img src="img/arr2.1.png" alt="">
                    </div>
                </div>
                <br><br><br>
            </div>
            <h1 class="h1">Предложить товар</h1>
            <?php
                if(isset($_POST['add_tovars'])){
                $name = $_POST['name'];
                $opisanie = $_POST['opisanie'];
                $price = $_POST['price'];

                $sql = "INSERT INTO tovar (name,opisanie,price)
                VALUES ('$name','$opisanie','$price')";
                $link -> query($sql);
                }
            ?>
            <form class="form-add" method="POST" name="add_tovars">
                <input type="text" class="input-text" name="name" placeholder="Наименование товара">
                <input type="text" class="input-text" name="opisanie" placeholder="Описание">
                <input type="text" class="input-text" name="price" placeholder="Цена">
                <input type="submit" value="Сохранить" class="btn" name="add_tovars">
            </form><br><br><br>
        </div>
    </section>
    <section class="contacts" id="contacts">
        <div class="container">
            <h1 class="h1">Контакты</h1>
            <div class="contacts-content">
                <div class="contacts-text">
                    <h2 class="ben-title">Телефон</h2>
                    <p class="ben-text">8 908 654 20 56</p><br>
                    <h2 class="ben-title">Адрес</h2>
                    <p class="ben-text">г.Казань, ул. Кул Гали, 8а</p><br>
                    <h2 class="ben-title">Почта</h2>
                    <p class="ben-text">gardenshop@mail.ru</p><br>
                </div>
                <div class="contacts-img">
                    <img src="img/contacts.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <div class="line2"></div>
    <?php
        include('footer.php');
    ?>
</body>
</html>