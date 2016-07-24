<?php
    include_once './header.php';
?>

<div class="register-user">
    <h2>Prijava uporabnika</h2>
    <form action="login_check.php" method="POST" autocomplete="off">
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
        </ul>
    </form>
</div>

<?php
    include_once './footer.php';
?>
