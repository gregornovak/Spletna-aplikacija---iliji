<?php
    session_start();
    if (isset($_SESSION['user_id'])){
        header("Location: index.php");
        die();
    }
    //includam podatkovno bazo, katero rabimo za nov zapis uporabnika
    include_once './database.php';
    //pridobim podatke, ki jih je uporabnik vpisal v register_user.php form-o
    //mysqli_real_escape_string(connection,escapestring);
    $first_name = mysqli_real_escape_string($link, $_POST['first_name']);
    $last_name  = mysqli_real_escape_string($link, $_POST['last_name']);
    $email      = mysqli_real_escape_string($link, $_POST['email']);
    $pass1      = mysqli_real_escape_string($link, $_POST['pass1']);
    $pass2      = mysqli_real_escape_string($link, $_POST['pass2']);

    //najprej preverim če je uporabnik vpisal podatke v obvezna polja
    if (!empty($email) && !empty($pass1) && !empty($pass2)) {
        //preverim če že obstajaš račun s tem email naslovom
        $query = sprintf("SELECT * FROM users WHERE email = '%s'", $email);
        //pošljem poizvedbo
        $result = mysqli_query($link, $query);
        //če nam array vrne rezultat večji od nič pomeni da je bil ta email naslov že uporabljen
        if (mysqli_num_rows($result) != 0) {
            $_SESSION['errors'] = array("Ta elektronski naslov je že bil uporabljen!");
            header("Location: register_user.php");
            die();
        } else { //preverim ali se gesli ujemata
            if ($pass1 == $pass2) {
                $pass = md5($pass1); //zakodiram geslo z md5
                //vstavim podatke v poizvedbo
                $query = "INSERT INTO users(first_name, last_name, email, pass) VALUES ('$first_name', '$last_name', '$email', '$pass')";
                //mysqli_query(connection($link),query($query),resultmode);
                //connection, query - obvezno, resultmode - opcijsko
                mysqli_query($link, $query);
                header("Location: index.php"); die();//preusmerim na domačo stran
            } else {
                $_SESSION['errors'] = array("Gesli se ne ujemata!");
                header("Location: register_user.php");
                die();
            }

        }

    } else {
        $_SESSION['errors'] = array("Niste vpisali vseh potrebnih podatkov!");
        header("Location: register_user.php");
        die();
    }
    mysqli_close($link);
?>
