<?php


    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    
    $headers = "From: ".$email;

    $recipient = "jm7441828@gmail.com";
    $txt = "You have recived an email from ".$name.".\n\n".$message;

    mail($recipient, $txt, $headers)
    or die("Error!");

    echo'
    
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="contact.css" />
  </head>
  <body>
 
    <div class="container">
      <h2>Thank you for contacting me. I will get back to you 
        as soon as possible!</h2>
        <p>Go back to the <a href="index.html">homepge</a></p>
  </body>
</html>
    ';
   
   ?>