<?php
    require_once '../controllers/newsMapper.php';

    if(isset($_GET['id'])){
        $newsID = $_GET['id'];
    }

    $news = new newsMapper;
    $news ->removeNews($newsID);
    header("location: news.php");
?>