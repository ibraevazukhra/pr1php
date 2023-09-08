<?php
    $db_host ='localhost';
    $db_user='z683';
    $db_name = 'z683';
    $db_pass = 'RjHp57dGwraS3YAa';

    // $db_host ='localhost';
    // $db_user='root';
    // $db_name = 'reg';
    // $db_pass = 'root';

    try{
        $link = new PDO("mysql:host=$db_host;dbname=$db_name;", $db_user, $db_pass);
    }catch(PDOException $error){
        die('Ошибка подключения к бд:' . $error->getMessage());
    }
    
?>