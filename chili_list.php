<?php
    //vključim sejo, da preverim če je uporabnik vpisan
    include_once './session.php';
    //vključim podatkovno bazo, ker bom izpisoval podatke
    include_once './database.php';
    include_once './header.php';
    if (!isset($_SESSION['user_id'])) {
        header("Location: login_user.php");
        die();
    }
?>
<!--Začetek seznama za čilije-->
<div class="chilis-container">
    <div class="chilis-title">
        <a href="add_chili.php"><i class="fa fa-plus-circle fa-custom-plus"></i><span class="add-new">Dodaj čili</span></a>
        <h2>Seznam vseh čilijev</h2>
    </div>
    <?php
        //poizvedba za čilije
        $query = "SELECT * FROM chillis";
        $result = mysqli_query($link, $query);
        //dokler najdeš rezultat -> izpisuj
        while($chili = mysqli_fetch_array($result)){
    ?>
    <div class="chili-list">
        <a href="<?php echo 'chili.php?id='.$chili['id_chillis'];?>">
            <img src="<?php echo $chili['chili_picture_url'];?>" alt="čilibuli">
            <p class="chili-list-title"><?php echo $chili['chili_name']; ?></p>
        </a>
    </div>
    <?php
        }
    ?>
    <div class="clear-fix"></div>
</div>
<!--Konec seznama za čilije-->
<?php
    include_once './footer.php';
?>
