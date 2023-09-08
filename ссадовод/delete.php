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
    
    <section>
        <br> <br>
        <div class="container">
            <a href="tovar.php" class="">
                <img src="img/knop-back.png" alt="#">
            </a> <br><br>
            <?php
            if(isset($_GET['id'])){
            $get_id = $_GET['id'];
            $sql = "SELECT * FROM tovar WHERE id = '$get_id'";
            $result = $link -> query($sql);
            $tovar = $result -> fetch();
            ?>

            <div class="container">
            Вы подтверждаете удаление товара?<br><br>

                <a href="delete.php?id=<?=$get_id?>&del_ok" class="yes">Подтвердить</a> |
                <a href="index.php"class="no">Отменить</a> 
            </div>
            <?    
            if(isset($_GET['del_ok'])){
                $sql = "DELETE FROM tovar WHERE id = '$get_id'";
                $link -> query($sql);
                echo '<script>document.location.href="index.php"</script>';
            }

        }else{
            echo'Не выбран товар';
        }
        ?>
        </div> 
    </section><br><br>

    <?php
        include('footer.php');
    ?>
</body>
</html>