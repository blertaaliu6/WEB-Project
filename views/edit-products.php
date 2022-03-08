<?php
    require_once '../controllers/MenuController.php';

    if(isset($_GET['id'])){
        $productsID = $_GET['id'];
    }

    $product = new MenuController;
    $currentProducts = $product ->edit($productsID);

    if(isset($_POST['submit'])){
        $product ->update($_POST, $productsID);
    }
?>

<style>
    form{
        border:1px solid;
        background:rgb(148, 203, 247);
    }
</style>
<form method="POST">
    Foto:
    <input type="file" name="foto" value="<?php echo $currentProducts['foto_produktit']; ?>">
    <br><br>

    EmriProduktit:
    <input type="text" name="emri" value="<?php echo $currentProducts['emri_produktit']; ?>">
    <br><br>

    Cmimi:
    <input type="text" name="cmimi" value="<?php echo $currentProducts['cmimi_produktit']; ?>">
    <br><br>

    <input type="submit" name="submit" value="Update">

</form>