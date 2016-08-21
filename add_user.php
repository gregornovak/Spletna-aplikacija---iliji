<?php
    session_start();
    if (isset($_SESSION['user_id'])){
        header("Location: index.php");
        die();
    }
    //includam podatkovno bazo, katero rabimo za nov zapis uporabnika
    include_once './database.php';
    include_once './functions.php';

    if (!empty($_POST['submit'])) {
        //pridobim podatke, ki jih je uporabnik vpisal v register_user.php form-o
        //mysqli_real_escape_string(connection,escapestring);
        $first_name = clean_data($_POST['first_name']);
        $last_name  = clean_data($_POST['last_name']);
        $email      = clean_data($_POST['email']);
        $pass1      = clean_data($_POST['pass1']);
        $pass2      = clean_data($_POST['pass2']);

        //najprej preverim ali je email naslov veljaven
        if (is_email($email)) {
            //preverim če že obstajaš račun s tem email naslovom
            $query = mysqli_real_escape_string($link, "SELECT * FROM users WHERE email = '$email'");
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
                    $query = mysqli_real_escape_string($link, "INSERT INTO users(first_name, last_name, email, pass) VALUES ('$first_name', '$last_name', '$email', '$pass')");
                    //mysqli_query(connection($link),query($query),resultmode);
                    //connection, query - obvezno, resultmode - opcijsko
                    mysqli_query($link, $query);
                    header("Location: index.php"); die();//preusmerim na domačo stran
                } else {
                    //če se gesli ne ujemata, vrnem error
                    $_SESSION['errors'] = array("Gesli se ne ujemata!");
                    header("Location: register_user.php");
                    die();
                }
            }
        } else {
            //če email naslov ni veljaven vrnem error
            $_SESSION['errors'] = array("Email naslov ni veljaven!");
            header("Location: register_user.php");
            die();
        }
    } else {
        //vrnem error če uporabnik ni vpisal vseh podatkov
        $_SESSION['errors'] = array("Niste vpisali vseh potrebnih podatkov!");
        header("Location: register_user.php");
        die();
    }
    mysqli_close($link);
?>
