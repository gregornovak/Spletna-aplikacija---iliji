<?php
    //dodam sejo, da preverim če je uporabnik vpisan
    include_once './session.php';
    //dodam podatkovno bazo za izpis vrst čilijev
    include_once './database.php';
    include_once './header.php';
    if (!isset($_SESSION['user_id'])){
        header("Location: index.php");
        die();
    }
?>
<div class="register-user">
    <h2>Dodaj nov čili!</h2>
    <form action="insert_chili.php" method="POST" enctype="multipart/form-data">
        <ul class="register-form">
            <li>
                <label for="name">Ime čilija:</label>
                <input type="text" name="name" required="required">
            </li>
            <li>
                <label for="scoville">Scoville enote:</label>
                <input type="text" name="scoville" required="required">
            </li>
            <li>
                <label for="desc">Opis čilija:</label>
                <textarea name="desc"></textarea>
            </li>
            <li>
                <label for="sort">Vrsta čilija:</label>
                <select name="sort">
                <?php
                    //izpišem vrste čilijev, da jih lahko uporabnik izbere
                    $query = "SELECT * FROM sorts";
                    $result = mysqli_query($link, $query);
                    while ($sort = mysqli_fetch_array($result)) {
                ?>
                    <option value="<?php echo $sort['id_sorts']; ?>"><?php echo $sort['sort_name'];?></option>

                <?php
                    }
                ?>
                </select>
            </li>
            <li>
                <label for="img">Slika čilija:</label>
                <input type="file" name="fileToUpload" id="fileToUpload" required="required">
            </li>
            <li>
                <input type="submit" value="Dodaj" name="submit" class="register-btn">
            </li>
            <?php if (isset($_SESSION['errors'])) {?>
                <div class="error-container">
                    <?php foreach($_SESSION['errors'] as $error) {?>
                        <p class="error-text"> <?php echo $error; ?></p>
                    <?php } ?>
                </div>
            <?php } ?>
        </ul>
    </form>
</div>

<?php
    include_once './footer.php';
?>
