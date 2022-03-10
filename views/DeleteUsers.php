<?php
    require_once '../controllers/userMapper.php';

    if(isset($_GET['id'])){
        $userid = $_GET['id'];
    }
    $user = new UserMapper;
    $user ->deleteUser($userid);

    header("location: users.php")


?>