<?php
    //vključim sejo, da preverim če je uporabnik vpisan
    include_once './session.php';
    include_once './header.php';
    if (isset($_SESSION['user_id'])){
        header("Location: index.php");
    }
?>

<div class="register-user">
    <h2>Prijava uporabnika</h2>
    <form action="login_check.php" method="POST" name="loginUser" onsubmit="return loginValidation()">
        <ul class="register-form">
            <li>
                <label for="email">E-naslov:</label>
                <input type="email" name="email" required="required">
            </li>
            <li>
                <label for="pass">Geslo:</label>
                <input type="password" name="pass1" required="required">
            </li>
            <li>
                <input type="submit" value="Prijava" name="submit" class="register-btn">
            </li>
            <?php if (isset($_SESSION['errors'])){ ?>
                <div class="error-container">
                    <?php foreach ($_SESSION['errors'] as $error) {?>
                        <p class="error-text"><?php echo $error; ?></p>
                    <?php } ?>
                </div>
            <?php } unset($_SESSION['errors']);?>
        </ul>
    </form>
</div>
<?php
    include_once './footer.php';
?>
