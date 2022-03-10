
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
        <form method="POST" action="controllers/VerifyContactUs.php" onsubmit="return validateContact()" >
       

          <h1>Contact US</h1>
            <label for="">Name:</label>
            <input type="text" name="name" class="input input-fields" placeholder="Your name" />
            <label for="">Email:</label>
            <input type="email" name="email" class="input input-fields email" placeholder="Your email">
            <label for="">Messsage:</label>
            <textarea name="message" class="input input-fields message" placeholder="Your message"></textarea>
            <input id="submit" name="submit" type="submit" class="input submit" value="Konfirmo" />
        </form>
      </div>
      <?php
        include "includes/footer.php";
      ?>
        <script src="js/contact.js"></script>
        <script src="js/toggle.js"></script>
</body>
</html>