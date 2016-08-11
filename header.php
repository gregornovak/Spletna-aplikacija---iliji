<?php
    //začnem sejo, da omejim dostop uporabnikom, ki niso prijavljeni
    include_once './session.php';
?>
<!DOCTYPE html>
<html lang="sl">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pikantna Lestvica</title>
    <meta name="description" content="Pikantna lestvica je namenjena ljubliteljem pikantne hrane. Našli boste velik seznam čilijev iz celotnega sveta ter njihove podrobnosti.">
    <meta name="author" content="Gregor Novak">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./assets/css/font-awesome.min.css">
</head>
<body>
    <!--Naslov strani ter navigacijski meni-->
    <header>
        <div class="site-title">
            <a href="index.php"><span class="site-spicy">Pikantna</span> lestvica</a>
        </div>
        <div class="burger-menu">
            <i class="fa fa-bars fa-2x fa-custom-icon"></i>
        </div>
        <div class="clear-fix"></div>
        <nav>
            <ul>
                <li><a href="chili_list.php"><i class="fa fa-list fa-custom-list"></i>Seznam čilijev</a></li>
                <li><a href="chili_sorts.php"><i class="fa fa-list fa-custom-list"></i>Vrste čilijev</a></li>
                <li><a href="blog.php"><i class="fa fa-rss fa-custom-list"></i>Blog</a></li>
                <?php
                    if(isset($_SESSION['user_id'])){
                ?>
                <li><a href="profile.php"><i class="fa fa-user fa-custom-list"></i><?php echo $_SESSION['username'];?></a></li>
                <li><a href="logout.php"><i class="fa fa-sign-out fa-custom-list"></i>Odjava</a></li>
                <?php
                    } else {
                ?>
                <li><a href="login_user.php"><i class="fa fa-sign-in fa-custom-list"></i>Prijava</a></li>
                <li><a href="register_user.php"><i class="fa fa-user-plus fa-custom-list"></i>Registracija</a></li>
                <?php
                    }
                ?>
                <div class="clear-fix"></div>
            </ul>
        </nav>


    </header>
    <!--Konec navigacijskega menija-->
