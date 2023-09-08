<?php
    require('app/connect.php');
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<div class="delete_div">
<h1>Удаление куратора</h1>
    <?php
        if(isset($_GET['id'])){
            $get_id = $_GET['id'];
            $sql = "SELECT * FROM item WHERE id = $get_id";
            $result = $link -> query($sql);
            $new = $result -> fetch();?>

            Вы подтверждаете удаление товара: <?=$new['name']?> <?=$new['name']?><br><br>

            <a href="delete.php?id=<?=$get_id?>&del_ok">Подтвердить</a> |
            <a href="item.php?id=<?=$get_id?>">Отменить</a> 

            <?    
            if(isset($_GET['del_ok'])){
                $sql = "DELETE FROM curators WHERE id = $get_id";
                $link -> query($sql);
                echo '<script>document.location.href="/"</script>';
            }

        }else{
            echo'Не выбран куратор';
        }
    ?>
</div>
</body>
</html>