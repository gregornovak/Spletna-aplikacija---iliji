<?php
    //vključim sejo, da preverim če je uporabnik vpisan
    include_once './session.php';
    //vključim podatkovno bazo, ker bom vpisoval podatke
    include_once './database.php';

    if (!isset($_SESSION['user_id'])){
        header("Location: index.php");
        die();
    }
    //sprejmem vse podatke, ki jih je uporabnik vpisal v formo add_chili.php
    $chili_name     = mysqli_real_escape_string($link, $_POST['name']);
    $chili_scoville = mysqli_real_escape_string($link, $_POST['scoville']);
    $chili_descr    = mysqli_real_escape_string($link, $_POST['desc']);
    $chili_sort_id  = mysqli_real_escape_string($link, $_POST['sort']);
    $user_id = $_SESSION['user_id']; //da vem kateri uporabnik doda čili
    //če niso polja prazna -> gremo naprej
    if (!empty($chili_name) && !empty($chili_scoville) && !empty($chili_descr) && !empty($chili_sort_id)) {

        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        //preverim če je datoteka slika
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                $uploadOk = 1;
            } else {
                $_SESSION['errors'] = array("Datoteka ni slika!");
                $uploadOk = 0;
                header("Location: add_chili.php");
                die();
            }
        }
        //preverim velikost slike, da ni prevelika
        if ($_FILES["fileToUpload"]["size"] > 5000000) {
            $_SESSION['errors'] = array("Slika je prevelika!");
            $uploadOk = 0;
            header("Location: add_chili.php");
            die();
        }
        //preverjam ali so slike dovoljenih formatov
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            $_SESSION['errors'] = array("Samo JPG, JPEG, PNG & GIF končnice so dovoljene.");
            $uploadOk = 0;
            header("Location: add_chili.php");
            die();
        }
        //če je $uploadOk nastavljen na 0 zaradi kakšne napake
        if ($uploadOk == 0) {
            $_SESSION['errors'] = array("Vaša slika ni bila naložena.");
            header("Location: add_chili.php");
            die();
        //če ni nobene napake, zapišem podatke v bazo
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                $query = "INSERT INTO chillis(chili_name, chili_scoville, chili_description, chili_picture_url, id_users, id_sorts) VALUES('$chili_name', '$chili_scoville', '$chili_descr', '$target_file', '$user_id', '$chili_sort_id')";
                mysqli_query($link, $query);
                header("Location: chili_list.php");
                die();

            } else {
                $_SESSION['errors'] = array("Prišlo je do napake.");
                header("Location: add_chili.php");
                die();
            }
        }
    } else {
        $_SESSION['errors'] = array("Niste vpisali vseh podatkov!");
        header("Location: add_chili.php");
        die();
    }
?>
