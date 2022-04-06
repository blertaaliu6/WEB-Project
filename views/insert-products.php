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
        width:400px;
        height:200px;
        font-weight:bold;
        padding-top:15px;
        padding-left:5px;
    }
    form input{
        padding-top:3px;
        padding-left:4px;
        font-size:17px;
        font-weight:bold;
    }
    #save{
        padding-top:4px;
        padding-bottom:4px;
        margin-bottom:3px;
        margin-left:5px;
        background-color:lightpink;
        margin-top:35px;
    }  
    

</style>
<div>
    <h1>Inserto produkte:</h1>
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
        <input id="save" type="submit" name="submit" value="Save">
    </form>
</div>