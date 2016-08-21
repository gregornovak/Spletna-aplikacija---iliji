<?php
    //začnem sejo, da omejim dostop uporabnikom, ki niso prijavljeni
    include_once './session.php';
    include_once './header.php';
    //vključim podatkovno bazo, ker bom delal poizvedbo če vrsta obstaja
    include_once './database.php';
    if (!isset($_SESSION['user_id'])){
        header("Location: login_user.php");
    }

?>
<div class="chilis-container">
    <div class="chilis-title">
        <a href="add_sort.php"><i class="fa fa-plus-circle fa-custom-plus"></i><span class="add-new">Dodaj vrsto</span></a>
        <h2>Seznam vseh vrst</h2>
    </div>

    <?php
        //poizvedba, ki vrne vse vrste čilijev
        $query = "SELECT * FROM sorts";
        $result = mysqli_query($link, $query);
        //dokler najdeš rezultat -> izpisuj
        while($sort = mysqli_fetch_array($result)){
    ?>
    <div class="sort">
        <h3 class="sort-name"><?php echo $sort['sort_name']; ?></h3>
        <p class="sort-desc"><?php echo $sort['sort_description']; ?></p>
    </div>
    <hr class="chili-hr">
    <?php
        }
        mysqli_close($link);
    ?>
</div>

<?php
    include_once './footer.php';
?>
