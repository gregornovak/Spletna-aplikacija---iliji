<?php
    //dodam sejo da preverim ali je uporabnik prijavljen
    include_once './session.php';
    //dodam podatkovno bazo ker bom izpisoval podatke
    include_once './database.php';
    include_once './header.php';
    if (!isset($_SESSION['user_id'])) {
        header("Location: login_user.php");
        die();
    }
    //<?php
    //echo $_GET["name"];
    //Assuming the user entered http://example.com/?name=Hannes
    //pridobim id čilija, da ga lahko najdem v bazi
    $id_chili = (int)$_GET['id'];
    //preverim če obstaja čili v bazi z istim idjem -> izpišem
    $query = "SELECT * FROM chillis WHERE id_chillis='$id_chili'";
    $result = mysqli_query($link, $query);
    $chili = mysqli_fetch_array($result);
?>
<div class="register-user">
    <h2>Uredi čili!</h2>
    <form action="chili_update.php" method="POST">
        <ul class="register-form">
            <input type="hidden" name="id" value="<?php echo $id_chili; ?>" />
            <li>
                <label for="name">Ime čilija:</label>
                <input type="text" name="name" required="required" value="<?php echo $chili['chili_name'];?>">
            </li>
            <li>
                <label for="scoville">Scoville enote:</label>
                <input type="text" name="scoville" required="required" value="<?php echo $chili['chili_scoville'];?>">
            </li>
            <li>
                <label for="desc">Opis čilija:</label>
                <textarea name="desc"><?php echo $chili['chili_description'];?></textarea>
            </li>
            <li>
                <input type="submit" value="Spremeni" name="submit" class="register-btn">
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
