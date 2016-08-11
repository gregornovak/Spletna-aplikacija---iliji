<?php
    //vključim sejo, da preverim če je uporabnik vpisan
    include_once './session.php';
    include_once './header.php';
    if (!isset($_SESSION['user_id'])){
        header("Location: login_user.php");
        die();
    }

?>
<div class="register-user">
    <h2>Sprememba gesla</h2>
    <form action="change_password.php" method="POST">
        <ul class="register-form">
            <li>
                <label for="pass1">Trenutno geslo:</label>
                <input type="password" name="pass1" required="required">
            </li>
            <li>
                <label for="pass2">Novo geslo:</label>
                <input type="password" name="pass2" required="required">
            </li>
            <li>
                <label for="pass2">Ponovi geslo:</label>
                <input type="password" name="pass2" required="required">
            </li>
            <li>
                <input type="submit" value="Spremeni geslo" name="submit" class="register-btn">
            </li>
        </ul>
    </form>
</div>
<?php
    include_once './footer.php';
?>
