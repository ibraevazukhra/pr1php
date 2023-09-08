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
    <section class="form">
        <div class="form_inner">
            <h2>Добавить</h2>
            <?php
        if(isset($_POST['add'])){
            $name = $_POST['name'];
            $categories = $_POST['categories'];
            $price = $_POST['price'];
            $opisanie = $_POST['opisanie'];
            $color = $_POST['color'];

            $sql = "INSERT INTO item (name,categories,price,opisanie,color)
                VALUES ('$name','$categories','$price','$opisanie','$color')";
            $link -> query($sql);

            
        }
    ?>
            <form action="" class="form_div" method="POST" name="add">
                <label for="">Название</label>
                <input type="text" name="" id="" value="<?=$news['name']?>">
                <label for="">Категория</label>
                <input type="text" name="" id="" value="<?=$news['categories']?>">
                <label for="">Цена</label>
                <input type="text" name="" id="" value="<?=$news['price']?>">
                <label for="">Описание</label>
                <textarea name="" value="<?=$news['opisanie']?>" ></textarea>
                <label for="">Цвет</label>
                <input type="text" name="" id="" value="<?=$news['color']?>">

                <input type="submit" name="add" value="Добавить"> 
            </form>
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