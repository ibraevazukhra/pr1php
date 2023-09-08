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
        <main>
        <div class="container">
        <?php
                            if(isset($_GET['id'])){
                            $get_id = $_GET['id'];
                            $sql = "SELECT * FROM tovar WHERE id = '$get_id'";
                            $result = $link -> query($sql);
                            $tovar = $result -> fetch();
            
                            if(isset($_POST['update_tovar'])){
                            $name = $_POST['name'];
                            $price = $_POST['price'];
                            $opisanie = $_POST['opisanie'];


                $sql="UPDATE tovar SET 
                        name = '$name', 
                        price = '$price', 
                        opisanie = '$opisanie'
                    WHERE id = '$get_id'";
                $link -> query($sql);
                
                echo "<script>document.location.href=\"update.php?id=$get_id\"</script>";
            }
            ?>
            <br><br>
            <a href="tovar.php?id=<?=$get_id?>">
                <img src="img/knop-back.png" alt="">
            </a>
            <h4>Редактирование</h4>
            <div class="tovar">
                <div class="container">
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

                            <form class="form-update" method="POST" name="update_tovar">
                                <input type="text" class="input-text" name="name" placeholder="Название товара" value="<?=$tovar['name']?>"><br><br>
                                <input type="text" class="input-text" name="price" placeholder="Цена товара" value="<?=$tovar['price']?>"><br><br>
                                <input type="text" class="input-text" name="opisanie" placeholder="Описание" value="<?=$tovar['opisanie']?>"><br><br>
                                <input type="submit" class="btn" value="Сохранить" name="update_tovar">
                            </form>
                            <?}else{
            echo'Не выбран товар';
        }

    ?>
                    </div>
                </div>
            </div><br><br><br><br>
        </div> 
    </main>

    <?php
        include('footer.php');
    ?>
</body>
</html>