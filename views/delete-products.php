<?php
    require_once '../controllers/MenuController.php';

    if(isset($_GET['id'])){
        $productsID = $_GET['id'];
    }

    $product = new MenuController;
    $product ->delete($productsID);
    header("location: produktet.php");
?>