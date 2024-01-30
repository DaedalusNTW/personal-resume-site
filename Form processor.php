<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="Style.css">
    <title>Contact Us</title>
    <META NAME="robots" CONTENT="noindex">
  </head>
<body>
      <section class="container">
            Thank you! Your message has been sent and will be responded to as soon as possible.
            <br>
            <a href="index.html">Return to homepage</a>
      </section>
<?php
      $name = $_POST['userName'];
      $email = $_POST['userEmail'];
      $phone = $_post['userPhone'];
      $company = $_POST['userCompany'];
      $message = $_POST['userMessage'];
      
      $to = "daedalusntw@gmail.com";
      $subject = "CDS website";
      $intro = "$name has a question his/her email address is $email The phone number is $phone";

      mail($to, $name, $message, $intro);
      ?>
</body>