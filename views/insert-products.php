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
    #save{
        margin-top:20px;
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
        <br><br>

        Kategoria:
        <select name="pcategory">
            <option value=""></option>
            <option value="mens_clothes">Mens Clothes</option>
            <option value="womens_clothes">Womens clothes</option>
            <option value="kids_clothes">Kids clothes</option>
        </select> <br><br>
        <input id="save" type="submit" name="submit" value="Save">
    </form>
</div>