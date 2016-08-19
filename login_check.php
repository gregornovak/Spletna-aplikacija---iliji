<?php
    //začnem sejo, da omejim dostop uporabnikom, ki niso prijavljeni
    include_once './session.php';
    if (isset($_SESSION['user_id'])){
        header("Location: index.php");
        die();
    }
    //vključim podatkovno bazo, ker bom delal poizvedbo če uporabnik obstaja
    include_once './database.php';

    //pridobim podatke iz login_user.php form-e
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $pass  = mysqli_real_escape_string($link, $_POST['pass1']);
    $pass = md5($pass); //zakodiram geslo v md5
    //če sta vrednosti vpisani, preverim ali obstaja ta uporabnik
    if (isset($email) && isset($pass)) {
        $query = sprintf("SELECT * FROM users WHERE email='%s' AND pass='%s'", $email, $pass);
        $result = mysqli_query($link, $query);
        //če je našlo uporabnika ga preusmerim na index.php
        if (mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_array($result);
            $_SESSION['user_id'] = $user['id_users'];
            $_SESSION['username'] = $user['first_name']. ' ' .$user['last_name'];
            $_SESSION['admin'] = $user['admin'];
            mysqli_close($link);
            header("Location: index.php"); die();
        } else {
            // če ga pa ni našlo, ga pa preusmerim nazaj na login_user.php
            $_SESSION['errors'] = array("Ta uporabnik ne obstaja!");
            header("Location: login_user.php");
            die();
        }
    } else {
        $_SESSION['errors'] = array("Niste vpisali vseh podatkov!");
        header("Location: login_user.php");
        die();
    }

?>
