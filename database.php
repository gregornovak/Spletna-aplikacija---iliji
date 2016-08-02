<?php
    //določim spremenljivke za povezavo do podatkovne baze
    $username = "admin";
    $password = "geslo123";
    $db_name  = "pikantna lestvica";
    $server   = "127.0.0.1";
    //se povežem z podatkovno bazo ter shranim te podatke v spremenljivko
    $link = mysqli_connect($server, $username, $password, $db_name);

    mysql_query($link, 'SET NAMES "utf-8"');
    //funkcija za kodiranje gesla
    function code_password($pass){
        $salt = '3k45h#$%#4kyxjhf23';
        $pass = $salt.$pass;
        return sha1($pass);
    }
?>
