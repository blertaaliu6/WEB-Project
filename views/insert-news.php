<?php
require_once '../controllers/newsMapper.php';

$news = new newsMapper;

if(isset($_POST['submit'])){
    $news ->insertNews($_POST);
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
        Titulli:
        <input type="text" name="titulli">
        <br>
        <br>
        Permbajtja:
        <input type="text" name="permbajtja">
        <br><br>
        Data:
        <input type="text" name="data">
        <br><br>
        <input id="save" type="submit" name="submit" value="Save">

    </form>
</div>