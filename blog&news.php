<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>  
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <title>Document</title>
    <link rel="stylesheet" href="css/blog&news.css">
    
</head>
<body>

<?php
 include "includes/header.php";
 require_once 'controllers/newsMapper.php';

?>
    <div class="blog-section">
        <div class="section-content blog">
            <div class="title">
                <h2>Blog & News</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit
                    Sint, adipisci fugiat.
                </p>
            </div>
            <div class="cards">
            <?php
                $news = new newsMapper;
                $all = $news->getAllNews();
                for($i=0;$i<count($all);$i++){
               echo' <div class="card">

               <div class="image-section">
               <img src="' . $all[$i]['foto_lajmit'] . '">
               </div>
               <div class="article">
                   <h4>'. $all[$i]['titulli_lajmit'] . '</h4>
                   <p>' . $all[$i]['permbajtja_lajmit'] . '</p>
                   </div>
               <div class="blog-view">
                   <a href="https://guides.loc.gov/fashion-industry" class="button">Read More</a>
               </div>
               <div class="posted-date">
                   <p>Posted' . $all[$i]['data_lajmit'] . '</p>
               </div>
               
            </div>';
                }
                ?>
        </div>          
    </div>
</div>



    <?php  include "includes/footer.php" ?>
    <script src="js/toggle.js"></script>


</body>
</html>