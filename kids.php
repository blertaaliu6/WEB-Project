<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <title>Document</title>
  <link rel="stylesheet" href="css/kids.css">


</head>

<body>


    <?php include "includes/header.php";
            require_once './controllers/MenuController.php';
      ?>

  <div class="first-header">
    <h1 id="kids-id">Kids's <span>Wear</span> </h1>
  </div>
  <img id="img-kids" src="img/banner-kids.jpg" alt="">

  <!-- Produktet -->
  <section class="section">
    <div class="title">
      <h1 class="kids-section">The newest collection from all over the world</h1>
    </div>
    <div class="product-center container">
      <?php
      $products = new MenuController;
      $kategoria="kids_clothes";
      $all = $products->select($kategoria);

      for ($i = 0; $i < count($all); $i++) {
        echo '<div class="product">
          <div>
              <img src="' . $all[$i]['foto_produktit'] . '">
          </div>
          <h3>' . $all[$i]['emri_produktit']  . '<span class="span-qmimi">' . $all[$i]['cmimi_produktit'] . '</span></h3>  
          
          <button class="btn-kids">ADD TO CART+</button>
          <button class="btn-kids" id="shop-kids">Shop Now</button>
          
        </div>';
      }
      ?>
    </div>


    </div>
  </section>

  <!--Footer-->
  <?php include "includes/footer.php" ?>

  <script src="js/toggle.js"></script>

</body>

</html>