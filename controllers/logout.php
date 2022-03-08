<?php

session_start();
session_destroy();
echo 'test';
header('Location: ../home.php');

?>