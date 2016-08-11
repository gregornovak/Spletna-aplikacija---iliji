<?php
    //določim spremenljivke, ki so potrebne za povezavo do podatkovne baze
    $server_name = '127.0.0.1'; //localhost
    $db_username = 'admin';
    $db_password = 'geslo123';
    $db_name     = 'pikantna lestvica';

    //mysqli mysqli_connect (string $host, string $username,
    //string $passwd, string $dbname, int $port, string $socket)
    //povezati se moram v vrstnem redu, ki je določen zgoraj
    $link = mysqli_connect($server_name, $db_username, $db_password, $db_name) or die(mysqli_error());
    //popravek zaradi napake v mysqli-php-utf8
    mysqli_query($link, 'SET NAMES "utf8"');

?>
