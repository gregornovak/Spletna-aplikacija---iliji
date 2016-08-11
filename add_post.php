<?php
    include_once './session.php';
    include_once './header.php';
    if (!isset($_SESSION['user_id'])) {
        header("Location: login_user.php");
    }
?>
<div class="register-user">
    <h2>Dodaj novo objavo!</h2>
    <form action="insert_post.php" method="POST">
        <ul class="register-form">
            <li>
                <label for="title">Naslov objave:</label>
                <input type="text" name="title" required="required">
            </li>
            <li>
                <label for="content">Besedilo:</label>
                <textarea name="content"></textarea>
            </li>
            <li>
                <input type="submit" value="Dodaj" name="submit" class="register-btn">
            </li>
        </ul>
    </form>
</div>

<?php
    include_once './footer.php';
?>
