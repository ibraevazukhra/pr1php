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
            <h2>Редактировать</h2>
            <?php
        if(isset($_GET['id'])){
            $get_id = $_GET['id'];
            $sql = "SELECT * FROM item WHERE id = $get_id";
            $result = $link -> query($sql);
            // $news = $result -> fetch();
            
            if(isset($_POST['update'])){
                $name = $_POST['name'];
                $categories = $_POST['categories'];
                $price = $_POST['price'];
                $opisanie = $_POST['opisanie'];
                $color = $_POST['color'];

                $sql="UPDATE item SET 
                    name = '$name', 
                    categories = '$categories', 
                    price = '$price',
                    opisanie = '$opisanie', 
                    color = '$color'
                    WHERE id = '$get_id'";
                $link -> query($sql);
                
                echo "<script>document.location.href=\"update_news.php?id=$get_id\"</script>";
            }
            ?>

            <form action="" class="form_div" method="POST" name="update">
                <label for="">Название</label>
                <input type="text" name="" id="" value="<?=$news['name']?>">
                <label for="">Категория</label>
                <input type="text" name="" id="" value="<?=$news['name']?>">
                <label for="">Цена</label>
                <input type="text" name="" id="" value="<?=$news['name']?>">
                <label for="">Описание</label>
                <textarea name=""  ></textarea>
                <label for="">Цвет</label>
                <input type="text" name="" id="" value="<?=$news['name']?>">

                <input type="submit" name="update" value="Сохранить"> 
            </form>

            <a href="item.php?id=<?=$get_id?>">Вернуться</a>
        <?}else{
            echo'Не выбран новость';
        }
        ?>

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