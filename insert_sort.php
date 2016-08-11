<?php
    //začnem sejo, da omejim dostop uporabnikom, ki niso prijavljeni
    include_once './session.php';
    //vključim podatkovno bazo, ker bom vstavljal podatke v bazo
    include_once './database.php';
    if (!isset($_SESSION['user_id'])){
        header("Location: index.php");
        die();
    }
    //pridobim podatke iz add_sort.php forme
    $chili_sort = mysqli_real_escape_string($link, $_POST['name']);
    $sort_desc  = mysqli_real_escape_string($link, $_POST['desc']);
    //če polji nista prazni, lahko zapišem v bazo
    if (!empty($chili_sort) && !empty($sort_desc)){
        $query = "INSERT INTO sorts(sort_name,sort_description) VALUES('$chili_sort', '$sort_desc')";
        mysqli_query($link, $query);
        header("Location: chili_sorts.php");
    } else {
        header("Location: add_sort.php");
        die();
    }
?>
