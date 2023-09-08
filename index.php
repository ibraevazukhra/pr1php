<?php
    require('incl/connect.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <title>Document</title>
</head>
<body>

    <div class="forma">
        <div class="container">
            <div class="ff">
            <div class="block">
                <h1 class="title">Регистрация</h1>

                <?php
                    if (isset($_POST['send'])) {

                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $pass1 = $_POST['password1'];
                        $pass2 = $_POST['password2'];
                        $count = iconv_strlen($pass1);
                        $namecount = iconv_strlen($name);

                        if(empty($name)){
                            $errorname.= '<p class="text">Введите имя</p>';
                        }else if ($namecount <2 ){
                            $errorname .= '<p class="text"> Минимальная длина имени - 2 символа</p>';
                        }
                        

                        if (empty($email)) {
                            $erroremail .= '<p class="text"> Введите почту</p>';
                        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            $erroremail .= '<p class="text"> Неверный формат почты</p>';
                        }

                        if(empty($pass1)){
                            $errorpass1.='<p class="text">Вы не ввели пароль</p>';
                        }elseif($count < 6){
                            
                            $errorpass1.='<p class="text">Введите пароль не менее<br> 6 символов</p>';
                        }
                        
                        if(empty($pass2)){
                            $errorpass2.='<p class="text">Повторите пароль!</p>';
                        }elseif($pass1!=$pass2){
                            $errorpass2.='<p class="text">Пароли не совпадают!</p>';
                        }
                        
                        if(empty($errorname) && empty($erroremail) && empty($errorpass1) && empty($errorpass2) ){
                            $sql = "SELECT * FROM `users` WHERE `email`='$email'";
                            $result = $link->query($sql);
                
                            if ($result->rowCount() == 0) {
                                $sql = "INSERT INTO users (name, email, password1, password2)
                                VALUES ('$name', '$email', '$pass1', '$pass2' )";
                                $link->query($sql);
                                $good.='<p class="good">Регистрация прошла успешно!</p>';
                            } else {
                                $erroremail.='<p class="text">Такая почта<br> уже зарегестрирована!</p>';
                            }
                        }
                    }
                ?> 

                <form method="POST" name="send" class="formm">
                    <input type="text" name="name" class="pass" placeholder="Введите имя" value="<?=$name?>">
                    <?= $errorname ?><br><br>
                    <input type="text" name="email" class="pass" placeholder="Введите email" value="<?=$email?>">
                    <?= $erroremail ?><br><br>
                    <input type="password" name="password1" class="pass" placeholder="Введите пароль">
                    <?= $errorpass1 ?><br><br>
                    <input type="password" name="password2" class="pass" placeholder="Подтвердите пароль">
                    <?= $errorpass2 ?>
                    <?= $errorr ?>
                    
                    <br><br><br>
                    <input type="submit" name="send" class="btn" value="Регистрация">
                    <?=$good?>
                </form>
                
            </div>
            </div>
        </div>
    </div>

    <div class="container"><br><br>
            <h1 class="title-form">Пользователи</h1><br>
            <div class="blocks">
                <?php
                $sql = 'SELECT * FROM users';
                $result = $link -> query($sql);
                $reg = $result -> fetchAll(2);
                ?>
                <table>
                    <tr>
                    <th >Имя</th>
                    <th >Email</th>
                    <th >Пароль</th>
                    </tr>
                </table>
                <?
                foreach ($reg as $regist) {?>
                    <table>
                    <tr>
                    <td><?=$regist['name']?></td>
                    <td><?=$regist['email']?></td>
                    <td><?=$regist['password1']?></td>
                    </tr>
                    </table>
                    
                <?}
                ?>
    </div>
    </div>
</body>
</html>