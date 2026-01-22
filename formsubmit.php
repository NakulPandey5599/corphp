<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message=$_POST['message'];


if ($_POST['name']) {
    $name = $_POST['name'];
}
if ($_POST['email']) {
    $email = $_POST['email'];
}
if ($_POST['phone']) {
    $phone = $_POST['phone'];
}

if ($_POST['subject']) {
    $subject = $_POST['subject'];
}
if ($_POST['message']){
    $message=$_POST['message'];
}


$messagecontent = '<html> 
  <head>
  <title> HM Road Assistance </title>
  </head>
  <body>
  
  <br>
  <h1>Contact Us Details :-</h1>
  <br>
  <h2> HM Road Assistance  - Contact Enquiries </h2>

  <ul style="list-style-type:square;"> 
    <h3><li>Full Name : ' . $name . '</li></h3>
    <h3><li>Email Address : ' . $email . '</li></h3>
    <h3><li>Phone Number : ' .  $phone . '</li></h3>
    <h3><li>Subject : ' .  $subject . '</li></h3>
    <h3><li>Message : ' .  $message . '</li></h3>
  </ul>
  </body> 
  </html>';

$mail = new PHPMailer(true);
try {
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'abhijaya8@gmail.com'; // Your Gmail email address
    $mail->Password = 'yvgphfjqlxsskwkf'; // Your Gmail app password or your account password (if less secure apps are allowed)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port = 587; // TCP port to connect to

    // $mail->setFrom($email, $name);
    $mail->addAddress('abhijaya8@gmail.com', 'HM Road Assistance');
    // $mail->addCC('abhijaya8@gmail.com', 'HM Road Assistance');
    // $mail->addAddress($email);
    $mail->isHTML(true);
    $mail->Subject = 'New Contact Form Submission';
    $mail->Body = $messagecontent;

    $mail->send();
    header('Location: https://carrepairandroadassistance24x7.in/thankyou.html?status=success&message=' . urlencode('Thank you for contacting us. We will contact you shortly.'));    
    exit;
} catch (Exception $e) {
    // Redirect with error message
    header('Location: https://carrepairandroadassistance24x7.in/thankyou.html?status=error&message=' . urlencode("Message could not be sent. Mailer Error: {$mail->ErrorInfo}"));
    exit;
}
