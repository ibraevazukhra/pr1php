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
    <?php
        include('header.php');
    ?>
    <section class="kartochka">
        <div class="container">
            <div class="knopki">
                <a href="index.php#catalog" class="taps" >
                    <img src="img/knop-back.png" class="knop-back" alt="#">
                </a>
                <?php
                    if(isset($_GET['id'])){
                    $get_id = $_GET['id'];
                    $sql = "SELECT * FROM tovar WHERE id = $get_id";
                    $result = $link -> query($sql);
                    $tovar = $result -> fetch();?>

                <a href="delete.php?id=<?=$tovar['id']?>" class="taps" >
                    <img src="img/knop-delete.png" alt="#">
                </a>
                <a href="update.php?id=<?=$tovar['id']?>" class="taps" >
                    <img src="img/knop-update.png" alt="#">
                </a>
            </div><br><br>
            <div class="tovar-content">
                <div class="imglar">
                    <a href="" class="taps" >
                        <img src="img/img1.png" alt="">
                    </a>
                    <a href="" class="taps" >
                        <img src="img/img2.png" class="opacity-img" alt="#">
                    </a>
                    <a href="" class="taps" >
                        <img src="img/img3.png" class="opacity-img" alt="#">
                    </a>
                    <a href="" class="taps" >
                        <img src="img/img4.png" class="opacity-img" alt="#">
                    </a>
                </div>
                <div class="foto">
                    <img src="img/foto.png" alt="#">
                </div>
                <div class="opisanie-tovara">
                    <p class="ben-text">Арт. 89079345</p><br>
                    <h1 class="h1"><?=$tovar['opisanie']?></h1>
                    <img src="img/stars.png" alt="#">
                    <p class="ben-text">(47 отзывов)</p><br><br>
                    <h2 class="ben-title"><?=$tovar['price']?></h2><br><br>
                    <a href="#" class="btn">В корзину</a>
                    <?}else{
                echo'Ошибка выбора';
                }
                ?>
                </div>
            </div>    
        </div>
    </section>
    <?php
        include('footer.php');
    ?>
</body>
</html>