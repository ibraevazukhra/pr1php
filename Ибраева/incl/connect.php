<?php

$db_host ='localhost';

// $db_user='z683';
// $db_name = 'z683';
// $db_pass = 'RjHp57dGwraS3YAa';

$db_user='root';
$db_name = 'sm11';
$db_pass = 'root';


try{
    $link = new PDO("mysql:host=$db_host;dbname=$db_name;", $db_user, $db_pass);
    echo 'С БД все ОК';
}catch(PDOException $error){
    die('Ошибка подключения к бд:' . $error->getMessage());
}
?>