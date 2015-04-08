<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$from = "From: Dmseq.org";
$to = "dmsequencing@gmail.com";
$subject = "Contact Form";
$body="From: $name \n Message: $message \n";
   
if ($_POST['submit']) {
   if (mail ($to, $subject, $body, $from)) {
      echo '<p>Thank you for your email!</p>';
   } else {
      echo '<p>Oops! An error occured. Try sending your message again.</p>';
   }
} 
?>