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
        font-weight:200;
        width:400px;
        height:200px;
        font-weight:bold;
        
    }
    form input{
        padding-top:3px;
        padding-left:4px;
        font-size:17px;
        font-weight:bold;
    }
    #submit{
        padding-top:4px;
        padding-bottom:4px;
        margin-bottom:3px;
        margin-left:5px;
        background-color:lightpink;
        margin-top:10px;
    }

    
</style>
<h1>Edito produkte:</h1>
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

    <input type="submit" name="submit" value="Update" id="submit">

</form>