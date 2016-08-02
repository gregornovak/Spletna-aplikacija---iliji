<?php
    include_once './database.php';
    include_once './session.php';
    //pridobim email ter geslo
    $email = $_POST['email'];
    $pass = $_POST['pass1'];
    $pass = code_password($pass);
    //naredim poizvedbo
    $query = sprintf("SELECT * FROM users WHERE email='%s' AND pass='%s'", mysqli_real_escape_string($link, $email),
    mysqli_real_escape_string($link, $pass));
    //shranim rezultat poizvedbe v spremenljivko result
    $result = mysqli_query($link, $query);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_array($result);
        $_SESSION['user_id'] = $user['id_users'];
        $_SESSION['admin'] = $user['admin'];

        header("Location: index.php"); die();
    } else {
        header("Location: login_user.php"); die();
    }

?>
