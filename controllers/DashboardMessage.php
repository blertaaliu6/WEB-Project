<?php
require_once 'ContactUsMapper.php';

if(isset($_POST['btn-remove-message'])){
    $id = $_POST['ID'];
    $mapper = new ContactUsMapper();
    $mapper->deleteMessage($id);
    header("Location: ../views/Dashboard.php");
}
?>