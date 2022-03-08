<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>  
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    
    <title>Document</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
    <?php
    
      include "includes/header.php"
    
    ?>

     <section class="banner">
        <div class="imgx">
            <img src="img/slider-1.jpg" alt="" class="active">
            <img src="img/slider-2.jpg" alt="">
            <img src="img/slider-3.jpg" alt="">
            <img src="img/slider-4.jpg" alt="">
           
        </div>

        <ul class="controls">
            <li onclick="nextSlide(); nextSlideText();"></li>
            <li onclick="prevSlide(); prevSlideText();"></li>
        </ul>   

        <div class="contentbx">
            <div class="active">
                <p class="paragraf-1">Women's Collection 2021</p> 
                <br>
                <h1 class="women-collections">NEW COLLECTION!</h1> 
                <br>
               <p class="paragraf-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit aliquam velit </p>
               <br>
               <a  class="btn-anm" href="womens.html"><img src="img/Button1.png" alt=""></a>
            </div>


            <div>
                <p class="paragraf-1">Kids Collection 2021</p> 
                <br>
                <h1 class="kids-collections">NEW COLLECTION!</h1> 
                <br>
               <p class="paragraf-2">Lorem ipsum dolor sit amet consectetur  elit. Odit aliquam velit similique </p>
               <br>
               <a class="btn-anm" href="kids.html"><img src="img/Button3.jpg" alt=""></a>
            </div>
            
            <div>
                <p class="paragraf-1">Men's Collection 2021</p> 
                <br>
                <h1 class="Men-collections">NEW COLLECTION!</h1> 
                <br>
               <p class="paragraf-2" >Lorem ipsum dolor sit amet consectetur adipisici elit. Odit aliquam velit simil</p>
               <br>
               <a class="btn-anm" href="men.html"><img src="img/Button2.jpg" alt=""></a>
            </div>

            <div>
                <p class="paragraf-1">Beauty Collection 2021</p> 
                <br>
                <h1 class="beauty-collection">NEW COLLECTION!</h1> 
                <br>
               <p class="paragraf-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.  aliquam velit similique hic</p>
               <br>
               <a class="btn-anm" href="beauty.html"><img src="img/Button4.jpg" alt=""></a>
            </div>
        </div>
     </section>
        

      <div class="div-choosing-us">

        <div class="headingtxt">
          <h1 class="heading1">Why would you choose us?</h1>
        </div>

        <div class="items-flex">

          <div class="col-4">
            <img src="img/icon1.jpg" >
            <h4 class="heading4">Free Shipping</h4>
            <p>All purchases over $199 are eligible for free shipping via USPS First Class Mail.</p>

        </div>

        <div class="col-4">
          <img src="img/icon2.jpg" >
          <h4 class="heading4">Easy Payments</h4>
          <p>All payments are processed instantly over a secure payment protocol</p>

      </div>

       <div class="col-4">
        <img src="img/icon3.jpg" >
        <h4 class="heading4">Money-Back Guarantee</h4>
        <p>If an item arrived damaged or you've changed your mind, you can send it >back for a full refund.</p>


       </div>

       <div class="col-4">
        <img src="img/icon4.jpg" >
        <h4 class="heading4">Finest Quality</h4>
        <p>Designed to las, each of our products has been crafted with the finest materials.</p>

        </div>

        </div>


      </div>
     
<section class="section">
    <div class="title">
      <h1 style="font-size: 50px;"><span id="h1"><b>New</b></span> Arrivals </h1>
    </div>
    <div class="product-center container">
      <div class="product">
        <div class="img-cover">
          <img src="img/product1.jpg" height="400px" alt="" />
        </div>
        <p> White T-Shirt</p>
        <img src="img/rating.JPG" height="30px" >
        <div class="price">$29.99</div>
      </div>

      <div class="product">
        <div class="img-cover">
          <img src="img/product2.jpg"height="400px" alt="" />
        </div>
        <p> White T-Shirt </p>
        <img src="img/rating.JPG" height="30px">
        <div class="price">$39.99</div>
      </div>

      <div class="product">
        <div class="img-cover">
          <img src="img/product3.jpg" height="400px"alt="" />
        </div>
        <p>LTB jeans</p>
        <img src="img/rating.JPG" height="30px" >
        <div class="price">$45.99</div>
      </div>
      <div class="product">
        <div class="img-cover">
          <img src="img/product4.webp"height="400px" alt="" />
        </div>
        <p>Sportswear</p>
        <img src="img/rating.JPG" height="30px" >
        <div class="price">$79.99</div>
      </div>
    </div>
  </section>


    <section class="nike-collection">
      <h2>Straight from nike</h2>
      <h1 style="font-size: 50px;"><span id="nike-text">Nike</span> Collection </h1>

      <div class="wrapper">
        <div class="box-1">
         
          <img src="img/nike-1.png" alt="">
          
          <p class="emri-pr">Nike Air Force 1 </p>
           
        </div>

        <div class="box-2">
          <img src="img/nike-2.png" alt="">
          <p class="emri-pr">NikeCourt Air</p>
        </div>

        <div class="box-3">
          <img src="img/nike-1.png" alt="">
          <p class="emri-pr">NikeCourt Air</p>
        </div>

        <div class="box-4">
          <img src="img/nike-4.png" alt="">
          <p class="emri-pr">Nike Signal</p>
        </div>

        <div class="box-5">      
          <img src="img/nike-5.png" alt="">
          <p class="emri-pr">Nike SB Zoom</p>
        </div>

        <div class="box-6">      
          <img src="img/nike-6.png" alt="">
          <p class="emri-pr">Nike airmax</p>
        </div>

        <div class="box-7">      
          <img src="img/nike-7.png" alt="">
          <p class="emri-pr">Nike Air Force 1 Shadow</p>
        </div> 
        
      </div>

    </section>
    

        <?php  include "includes/footer.php" ?>

     <script src="js/slider.js"></script>
     <script src="js/toggle.js"></script>
</body>
</html>
