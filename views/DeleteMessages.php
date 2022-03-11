<?php
    require_once '../controllers/ContactUsMapper.php';

    if(isset($_GET['ID'])){
        $messagesID = $_GET['ID'];
    }
    $messages = new ContactUsMapper;
    $messages ->deleteMessage($messagesID);

    header("location: contacts.php")


?>