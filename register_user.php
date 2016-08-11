<?php
    include_once './session.php';
    include_once './header.php';
    if (isset($_SESSION['user_id'])){
        header("Location: index.php");
    }
?>

<div class="register-user">
    <h2>Registracija uporabnika</h2>
    <form action="add_user.php" method="POST">
        <ul class="register-form">
            <li>
                <label for="first_name">Ime:</label>
                <input type="text" name="first_name">
            </li>
            <li>
                <label for="last_name">Priimek:</label>
                <input type="text" name="last_name">
            </li>
            <li>
                <label for="email">E-naslov:</label>
                <input type="email" name="email" required="required">
            </li>
            <li>
                <label for="pass">Geslo:</label>
                <input type="password" name="pass1" required="required">
            </li>
            <li>
                <label for="pass">Ponovi geslo:</label>
                <input type="password" name="pass2" required="required">
            </li>
            <li>
                <input type="submit" value="Registriraj me" name="submit" class="register-btn">
            </li>
        </ul>
    </form>
</div>

<?php
    include_once './footer.php';
?>
