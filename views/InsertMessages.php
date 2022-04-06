<?php
require_once '../controllers/ContactUsMapper.php';

$messages = new ContactUsMapper;

if(isset($_POST['submit'])){
    $messages ->insertMessage($_POST);
}
?>
<div>
    <form method="POST" >
        Name:
        <input type="text" name ="name">
        <br>
        <br>
        Email:
        <input type="email" name="email">
        <br>
        <br>
        Message:
        <input type="textarea" name="message">
        <br>
        <input id="submit" type="submit" name="submit" value="Konfirmo">
    </form>
</div>