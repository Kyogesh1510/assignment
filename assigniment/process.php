<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];

  
  $admin_message = "New Inquiry Submitted:\n"
                 . "Name: $name\n"
                 . "Email: $email\n"
                 . "Phone Number: $phone";

  
  $user_message = "Thank you for your inquiry! We will be in touch shortly.";

  
  $admin_email = "kyogesh1510@gamil.com";
  $user_email = $email; 


  $headers_admin = 'From: ' . $user_email . "\r\n" .
    'Reply-To: ' . $user_email . "\r\n" .
    'Content-Type: text/plain; charset=UTF-8';
  $headers_user = 'From: ' . 'your_website_name@example.com' . "\r\n" .
    'Reply-To: ' . 'no-reply@your_website.name' . "\r\n" .
    'Content-Type: text/plain; charset=UTF-8';

  
  mail($admin_email, "New Inquiry from Website", $admin_message, $headers_admin);
  mail($user_email, "Thank you for your Inquiry", $user_message, $headers_user);

  echo "Thank you for your inquiry!"; 
}
?>
