<?php
require_once '../controllers/MenuController.php';

$product = new MenuController;

if(isset($_POST['submit'])){
    $product ->insert($_POST);
}
?>

<style>
    form{
        border:1px solid;
        background:rgb(148, 203, 247);
    }
</style>
<div>
    <form method="POST" >
        Foto:
        <input type="file" name ="foto">
        <br>
        <br>
        EmriProduktit:
        <input type="text" name="emri">
        <br>
        <br>
        Cmimi:
        <input type="text" name="cmimi">
        <br>
        <input type="submit" name="submit" value="Save">
    </form>
</div>