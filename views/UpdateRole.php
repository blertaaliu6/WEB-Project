<?php
    require_once '../controllers/userMapper.php';

    if(isset($_GET['id'])){
        $productsID = $_GET['id'];
        $users = new UserMapper;
        $users ->upgradeRole($productsID);
    }
    header("location: users.php")
    

  
?>
