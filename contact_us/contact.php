<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';


$name = $_POST['name'];
$email_from_input = $_POST['email'];
$message = $_POST['message'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'ahmedailaoui2002@gmail.com';
    $mail->Password = 'cjgstpmmjtivgugj';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom($email_from_input);

    $mail->addAddress('ahmedailaoui2002@gmail.com');
    $mail->addAddress('hechlass@gmail.com');


    $mail->Subject = "Nouveau message depuis le formulaire de contact $name";


    $mail->Body .= "Nom: " . $name . "\n";
    $mail->Body .= "Email: " . $email_from_input . "\n";
    $mail->Body .= "Message: " . $message;

    

    try {
      $mail->send();
      echo "<script>alert('Message envoyé avec succès !');</script>";
      echo "<script>window.location.href = '../landing_page/home.html';</script>";
      exit();
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}  
?>