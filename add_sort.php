<?php
    //začnem sejo, da omejim dostop uporabnikom, ki niso prijavljeni
    include_once './session.php';
    include_once './header.php';
    if (!isset($_SESSION['user_id'])){
        header("Location: index.php");
        die();
    }
?>
<div class="register-user">
    <h2>Dodaj novo vrsto!</h2>
    <form action="insert_sort.php" method="POST">
        <ul class="register-form">
            <li>
                <label for="name">Ime vrste:</label>
                <input type="text" name="name" required="required">
            </li>
            <li>
                <label for="desc">Opis vrste:</label>
                <textarea name="desc"></textarea>
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
