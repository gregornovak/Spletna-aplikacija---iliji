<?php
    //includam podatkovno bazo za dostop do nje
    include_once './database.php';
    //s pomočjo $_POST metode pridobim podatke iz form-e
    $first_name = $_POST["first_name"];
    $last_name  = $_POST["last_name"];
    $email      = $_POST["email"];
    $pass1      = $_POST["pass1"];
    $pass2      = $_POST["pass2"];
    //preverim če so obvezni podatki prazni
    if (empty($email && $pass1 && $pass2)) {
        header("Location: add_user.php"); //če so obvezni podatki prazni, preusmerim na isto stran
    } else {
        if ($pass1 == $pass2) { //preverim če se gesli ujemata
            $pass = code_password($pass1);
            $query = "INSERT INTO users (first_name, last_name, email, pass) VALUES ('$first_name', '$last_name', '$email', '$pass')";
            mysqli_query($link, $query);
            header("Location: index.php"); die();
        } else {
            echo "Gesli se ne ujemata!";
        }
    }

    mysqli_close($link);
?>
