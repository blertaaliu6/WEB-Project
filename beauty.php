<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>  
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="css/beauty.css">
    
</head>
<body>

    <?php include "includes/header.php";
            require_once './controllers/MenuController.php';
      ?>


      <div class="img-cover">
      <img  id="foto1" src="img/beauty-collection.jpg" alt="">
    </div>

     <!-- Produktet -->
      <section class="section">
        <div class="title">
          <h1><span id="h1">New</span> Products <span id="h1">Beauty</span> section  </h1>
        </div>
            <div class="product-center container">

                  <?php
                $products = new MenuController;
                $kategoria="beauty";
                $all = $products->select($kategoria);

                  for ($i = 0; $i < count($all); $i++) {
                    echo '<div class="product">
                    <div class="img-cover">
                        <img height="400px" src="' . $all[$i]['foto_produktit'] . '">
                    </div>
                    <p>'. $all[$i]['emri_produktit']  .'<span class="price">' . $all[$i]['cmimi_produktit'] . '</span></p>
                    
                    <button class="btn">ADD TO CART +</button>
                    <button class="btn1">BUY NOW</button>
                    
                  </div>';
                  }
                  ?>

            </div>
          </section>


          <!--Footer-->
           <?php  include "includes/footer.php" ?>
    
      
      <script src="js/toggle.js"></script>
    </body>
</html>