<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>  
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="../css/register.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
   
  <header class="header">
    <div class="top-nav">
        <div class="container d-flex" >
        <a href="home.php"><img class="logo" src="../img/logo-7.png" alt=""></a>
            <ul class="d-flex">
              
                <li><a href=""><img src="../img/6f0a18fad030e38fc7194c6a4c334793.png" alt=""></a></li>
                <li><a href=""><img src="../img/bdcb0c3f6d67999723518ef3c2ad5494.png" alt=""></a></li>
                <li><a href="signin.php"><img src="../img/674aaa8a5939fb3fb007e77121fb1581.png" alt=""></a></li>
                <i class="fa fa-bars" aria-hidden="true" id="header_toggle"></i>
            </ul>
        </div>
    </div>
    <hr>

        <nav class="navigation" id="nav-menu">
           <ul class="nav-center d-flex">

              <li class="nav-item"><a href="womens.php" class="nav-links">Women</a></li>
              <li class="nav-item"><a href="men.php" class="nav-links">Men</a></li>
              <li class="nav-item"><a href="kids.php" class="nav-links">Kids</a></li>
              <li class="nav-item"><a href="beauty.php" class="nav-links">Beauty</a></li>
              <li class="nav-item"><a href="about.php" class="nav-links">About us</a></li>
              <li class="nav-item"><a href="contact.php" class="nav-links">Contact Us</a></li> 
              <li class="nav-item"><a href="blog&news.php" class="nav-links">Blog&News</a></li> 

             </ul>
          </nav>
      </header>

        <div class="reigster-form">
            <div class="img">

                <img src="../img/login-form.png" alt="">
    
            </div>
          <div class="form-all">
            <div class="header2">
                <h2>Sign Up</h2>
            </div>
            
            <form class="form" method="POST" action="../controllers/loginverify.php" onsubmit=" return validateInput()">
                <div class="form-control">
                    <lable class="label" for="Name" name="name">Name</lable>
                    <input id="Name" type="text" name="name" />
                    <small style="color: red;">Error Message</small>
                </div>
                <div class="form-control">
                    <lable class="label"  for="LastName" name="lname">Last Name</lable>
                    <input id="LastName" type="text" name="lname" />
                    
                    <small style="color: red;">Error Message</small>
                </div>
                <div class="form-control">
                    <lable class="label"  for="username" name="username">Username</lable>
                    <input id="txtUserName" type="text" name="username" />
                    <small style="color: red;">Error Message</small>
                </div>
                <div class="form-control">
                    <lable class="label"  for="email" name="email">Email</lable>
                    <input id="txtEmail" type="email" name="email" />
                    <small style="color: red;">Error Message</small>
                </div>
                <div class="form-control">
                    <lable class="label"  for="pwd" name="password">Password</lable>
                    <input id="txtPwd" type="password" name="password" />
                    <small style="color: red;">Error Message</small>
                </div>
                <div class="form-control">
                    <lable class="label"  for="conpwd" name="cpassword">Confirm Password</lable>
                    <input id="txtConPwd" type="password" name="cpassword" />
                    <small style="color: red;">Error Message</small>
                </div>
                <div class="form-control">
                    <button type="submit" name="register">Register</button>
                </div>
                <div class="form-control">
                <p>Already have an account? <a href="../views/signin.php">Sign In</a></p>
                </div>
            </form>
        </div>
    </div>      

    <!--Footer-->
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
    <script src="../js/register.js"></script>
    <script src="../js/toggle.js"></script>
</body>
</html>