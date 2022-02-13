<?php

use PHPMailer\PHPMailer\PHPMailer;
require_once './vendor/autoload.php';

$email_addr = $_POST["userEmailAddr"];
$email_cont = $_POST["userEmailContents"];
$email_addr = filter_var($email_addr, FILTER_SANITIZE_EMAIL); 
$email_cont = filter_var($email_cont, FILTER_SANITIZE_SPECIAL_CHARS);
$headervalue = "From: $email_addr";

$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = "smtp.ionos.co.uk";
$mail->SMTPAuth = true;
$mail->Username = 'jake.palmer@apertureinnovations.co.uk';
$mail->Password = 'Admin123pAsswordApertureinnovations';  
$mail->SMTPSecure = 'tls';
$mail->Port = 587; 

$mail->setFrom = "$email_addr";
$mail->FromName = 'Mailer';
$mail->addAddress("jakepalmer42@hotmail.com");

$mail->Subject = '$headervalue';
$mail->isHTML(TRUE);
$mail->Body = '$email_cont';
if ($mail->send()) {

  ?><html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8">
  <title>Thank you!</title>
  <link rel="stylesheet" href="master.css">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="icon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
  <div class="navNavbar">
  <a class="navNavItem navActive" href="index.html">Home</a>
  <div class="navNavGroup checkDisplay">
  <a class="navNavItem" href="skills.html">Skills</a>
  <a class="navNavItem" href="about.html">About</a>
  <a class="navNavItem navDisabled" href="">Extras</a>
  </div>
  <a class="navHide navHamBurger"><i class="fa fa-bars"></i></a>
  </div>
  <div class="jumbotron margin-ten margin-zero-t">
  <h1>Thank you for the feedback!</h1>
  <hr class="back-dark">
  <p>Your email was sent successfully.</p>
  </div>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script type="text/javascript" src="scriptabout.js"></script>
  </body>
  </html>
  <?php
} else {
  ?><html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8">
  <title>Oops!</title>
  <link rel="stylesheet" href="master.css">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="icon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
  <div class="navNavbar">
  <a class="navNavItem navActive" href="index.html">Home</a>
  <div class="navNavGroup checkDisplay">
  <a class="navNavItem" href="skills.html">Skills</a>
  <a class="navNavItem" href="about.html">About</a>
  <a class="navNavItem navDisabled" href="">Extras</a>
  </div>
  <a class="navHide navHamBurger"><i class="fa fa-bars"></i></a>
  </div>
  <div class="jumbotron margin-ten margin-zero-t">
  <h1>Oops! Something went wrong!</h1>
  <hr class="back-dark">
  <p>Sorry about that, we could not send your feedback. Please try again.</p>
  </div>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script type="text/javascript" src="scriptabout.js"></script>
  </body>
  </html>
  <?php
}
?>
