
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>  
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="css/contact.css">
    
</head>
<body>

    <?php  include "includes/header.php" ?>

      <div class="contact-forma">
        <form method="POST" action="controllers/VerifyContactUs.php" >

          <h1>Contact US</h1>

          <label for="name">Name:</label>
          <input type="text" id="name" placeholder="Your Name" name ="name">
          <small class="error"></small>

          <label for="email">Email:</label>
          <input type="email" id="email" placeholder="Your Email" name="email">
          <small class="error"></small>

          <label for="message">Message:</label>
          <textarea id="message" placeholder="Your message" name="message" ></textarea>
          <small class="error"></small>

          <div class="center">
            <input type="submit" name="submit">
            <p id="success"></p>
          </div>
        </form>


        <footer class="footer">
          <div class="container-footer">
            <div class="row">
              <div class="footer-col">
                <h4>company</h4>
                <ul>
                  <li><a href="#">about us</a></li>
                  <li><a href="#">our services</a></li>
                  <li><a href="#">privacy policy</a></li>
                  <li><a href="#">affiliate program</a></li>
                </ul>
              </div>
              <div class="footer-col">
                <h4>get help</h4>
                <ul>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">shipping</a></li>
                  <li><a href="#">returns</a></li>
                  <li><a href="#">order status</a></li>
                  <li><a href="#">payment options</a></li>
                </ul>
              </div>
              <div class="footer-col">
                <h4>online shop</h4>
                <ul>
                  <li><a href="#">watch</a></li>
                  <li><a href="#">bag</a></li>
                  <li><a href="#">shoes</a></li>
                  <li><a href="#">dress</a></li>
                </ul>
              </div>
              <div class="footer-col">
                <h4>follow us</h4>
                <div class="social-links">
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                  <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
              </div>
            </div>
          </div>
       </footer>

      </div>

        <!-- <script src="js/toggle.js"></script>

      <script src="js/contact.js">

      </script> -->
</body>
</html>